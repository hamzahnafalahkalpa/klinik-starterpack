<?php

declare(strict_types=1);

namespace Hanafalah\KlinikStarterpack\Database\Manager;

use Hanafalah\MicroTenant\Models\Tenant\Tenant;
use Illuminate\Database\Connection;
use Illuminate\Support\Facades\DB;
use Stancl\Tenancy\Contracts\TenantDatabaseManager;
use Stancl\Tenancy\Contracts\TenantWithDatabase;
use Stancl\Tenancy\Exceptions\NoConnectionSetException;

/**
 * PostgreSQL Schema Manager for Multi-Tenant Architecture
 *
 * This manager handles Wellmed's HYBRID multi-tenant database architecture:
 *
 * 1. SEPARATE DATABASES for TENANT-level tenants (flag='TENANT'):
 *    - clinic_4, clinic_5, etc. are separate PostgreSQL databases
 *    - Each contains yearly schemas: emr_2026, pos_2026, scm_2026, etc.
 *
 * 2. SCHEMAS WITHIN CORE DATABASE for APP/CENTRAL_TENANT levels:
 *    - wellmed database contains schemas: app_2, hq_1, group_3
 *    - These are tenant-specific schemas, NOT separate databases
 *
 * CRITICAL: Methods in this class must handle BOTH patterns correctly:
 * - createDatabase() creates actual databases for TENANT flag, schemas for others
 * - databaseExists() checks BOTH pg_database AND information_schema.schemata
 * - deleteDatabase() drops databases or schemas based on tenant flag
 *
 * COMMON BUG: If databaseExists() only checks schemas, it will fail to find
 * separate tenant databases and cause "Database clinic_X does not exist" errors.
 */
class PostgreSQLSchemaManager implements TenantDatabaseManager
{
    /** @var string */
    protected $connection;

    protected function database(): Connection
    {
        if ($this->connection === null) {
            throw new NoConnectionSetException(static::class);
        }

        return DB::connection($this->connection);
    }

    public function setConnection(string $connection): void
    {
        $this->connection = $connection;
    }

    /**
     * Create database or schema based on tenant type
     *
     * Multi-tenant architecture logic:
     * - FLAG_TENANT: Creates separate database (e.g., clinic_4, clinic_5)
     * - FLAG_CLUSTER: Creates schema within a cluster database (e.g., emr_2026 in clinic_4)
     * - FLAG_APP / FLAG_CENTRAL_TENANT: Creates schema in wellmed database (e.g., app_2, group_3)
     *
     * @param TenantWithDatabase $tenant
     * @return bool
     */
    public function createDatabase(TenantWithDatabase $tenant): bool
    {
        if (isset($tenant->flag)){
            switch ($tenant->flag) {
                case Tenant::FLAG_TENANT:
                    // TENANT-level: Create separate PostgreSQL database
                    return $this->database()->statement("CREATE DATABASE \"{$tenant->database()->getName()}\"");
                break;
                case Tenant::FLAG_CLUSTER:
                    // CLUSTER: Create schema within tenant database for yearly partitioning
                    return DB::connection($tenant->connection_name)->statement("CREATE SCHEMA \"{$tenant->database()->getName()}\"");
                break;
                default:
                    // APP / CENTRAL_TENANT: Create schema within wellmed database
                    return $this->database()->statement("CREATE SCHEMA \"{$tenant->database()->getName()}\"");
                break;
            }
        }else{
            switch ($this->connection) {
                case 'tenant':
                case 'central':
                    return $this->database()->statement("CREATE DATABASE \"{$tenant->database()->getName()}\"");
                break;
                default:
                    return $this->database()->statement("CREATE SCHEMA \"{$tenant->database()->getName()}\"");
                break;
            }
        }
    }

    public function deleteDatabase(TenantWithDatabase $tenant): bool
    {
        if (isset($tenant->flag)){
            switch ($tenant->flag) {
                case Tenant::FLAG_TENANT:
                    return $this->database()->statement("DROP DATABASE \"{$tenant->database()->getName()}\"");
                break;
                case Tenant::FLAG_CLUSTER:
                    return DB::connection($tenant->connection_name)->statement("DROP SCHEMA \"{$tenant->database()->getName()}\" CASCADE");
                break;
                default:
                    return $this->database()->statement("DROP SCHEMA \"{$tenant->database()->getName()}\" CASCADE");
                break;
            }
        }else{
            switch ($this->connection) {
                case 'tenant':
                case 'central':
                    return $this->database()->statement("DROP DATABASE \"{$tenant->database()->getName()}\"");
                break;
                default:
                    return $this->database()->statement("DROP SCHEMA \"{$tenant->database()->getName()}\" CASCADE");
                break;
            }
        }
    }

    /**
     * Check if database or schema exists
     *
     * CRITICAL: This method must check BOTH databases AND schemas to support
     * Wellmed's hybrid multi-tenant architecture.
     *
     * Architecture examples:
     * - clinic_4 = separate database (TENANT-level)
     * - app_2 = schema in wellmed database (APP-level)
     * - group_3 = schema in wellmed database (CENTRAL_TENANT-level)
     *
     * Why we check both:
     * 1. First check pg_database for separate tenant databases (clinic_4, clinic_5)
     * 2. Then check information_schema.schemata for schemas (app_2, hq_1, group_3)
     *
     * HISTORICAL BUG: Previous implementation only checked schemas, which caused
     * "Database clinic_4 does not exist" errors because clinic_4 is a database,
     * not a schema in the wellmed database.
     *
     * @param string $name Database or schema name to check
     * @return bool True if database or schema exists
     */
    public function databaseExists(string $name): bool
    {
        // Check if it's a database first (for TENANT-level tenants with separate databases)
        $databaseExists = (bool) $this->database()->select("SELECT datname FROM pg_database WHERE datname = '$name'");

        if ($databaseExists) {
            return true;
        }

        // If not a database, check if it's a schema (for APP/CENTRAL_TENANT level tenants)
        return (bool) $this->database()->select("SELECT schema_name FROM information_schema.schemata WHERE schema_name = '$name'");
    }

    /**
     * Configure connection settings for tenant database/schema
     *
     * Sets the search_path to the tenant's database/schema name.
     *
     * For APP/CENTRAL_TENANT (schemas in wellmed database):
     * - search_path = 'app_2' or 'group_3'
     * - database = 'wellmed' (stays the same)
     *
     * For TENANT (separate databases):
     * - search_path = 'public' or yearly schema like 'emr_2026'
     * - database = 'clinic_4' (different database)
     *
     * For CLUSTER (yearly schemas within tenant database):
     * - search_path = 'emr_2026', 'pos_2026', etc.
     * - database = 'clinic_4' (tenant's database)
     *
     * @param array $baseConfig Base connection configuration
     * @param string $databaseName Database or schema name
     * @return array Modified connection configuration
     */
    public function makeConnectionConfig(array $baseConfig, string $databaseName): array
    {
        $baseConfig['search_path'] = $databaseName;
        // if ($this->connection == 'central'){
        // }else{
        //     $baseConfig['database'] = $databaseName;
        //     $baseConfig['search_path'] = 'public';
        // }
        return $baseConfig;
    }
}
