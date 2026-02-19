# CLAUDE.md - Klinik Starterpack

This file provides guidance to Claude Code when working with the `hanafalah/klinik-starterpack` package.

## Package Overview

**Klinik Starterpack** is a foundational Laravel package for the Wellmed healthcare system that provides:
- PostgreSQL database/schema management for multi-tenant architecture
- Healthcare-specific seeders (permissions, roles, ICD codes, occupations, etc.)
- Artisan commands for installation and migration
- Base enums and contracts for clinical modules

**Namespace:** `Hanafalah\KlinikStarterpack`

**Dependencies:**
- `hanafalah/laravel-support` - Base Laravel utilities and service provider
- `hanafalah/microtenant` - Multi-tenancy engine
- `hanafalah/satu-sehat` - Indonesian health system integration

## CRITICAL: Multi-Tenant Database Architecture

This package contains `PostgreSQLSchemaManager` which is **mission-critical** for Wellmed's hybrid multi-tenant database architecture. Understanding this is essential to avoid breaking tenant sign-in functionality.

### The Hybrid Architecture

Wellmed uses TWO different storage strategies depending on tenant level:

```
TENANT-LEVEL (flag='TENANT')
============================
- Creates SEPARATE PostgreSQL DATABASES
- Example: clinic_4, clinic_5 are actual databases
- Contains yearly schemas: emr_2026, pos_2026, scm_2026

APP-LEVEL / CENTRAL_TENANT-LEVEL
================================
- Creates SCHEMAS within the 'wellmed' database
- Example: app_2, hq_1, group_3 are schemas in wellmed database
- NOT separate databases
```

### Database Structure Example

```
PostgreSQL Server
├── wellmed (database)
│   ├── public (schema)
│   ├── app_2 (schema) ─── Wellmed Lite APP
│   ├── hq_1 (schema) ──── HQ APP
│   └── group_3 (schema) ─ CENTRAL_TENANT
│
├── clinic_4 (database) ── TENANT (separate database!)
│   ├── public (schema)
│   ├── emr_2026 (schema)
│   ├── pos_2026 (schema)
│   └── scm_2026 (schema)
│
└── clinic_5 (database) ── Another TENANT
    └── ...
```

### CRITICAL WARNING: PostgreSQLSchemaManager

**File:** `src/Database/Manager/PostgreSQLSchemaManager.php`

This class implements `TenantDatabaseManager` from stancl/tenancy and handles database/schema creation, deletion, and existence checks.

#### The databaseExists() Bug That Must Never Happen Again

The `databaseExists()` method MUST check BOTH:
1. **pg_database catalog** - for TENANT-level separate databases (clinic_4, clinic_5)
2. **information_schema.schemata** - for APP/CENTRAL_TENANT level schemas (app_2, group_3)

**WRONG IMPLEMENTATION (causes "Database does not exist" errors):**
```php
// WRONG! Only checks schemas, misses separate tenant databases
public function databaseExists(string $name): bool
{
    return (bool) $this->database()->select(
        "SELECT schema_name FROM information_schema.schemata WHERE schema_name = '$name'"
    );
}
```

**CORRECT IMPLEMENTATION (current):**
```php
public function databaseExists(string $name): bool
{
    // Check if it's a database first (for TENANT-level tenants)
    $databaseExists = (bool) $this->database()->select(
        "SELECT datname FROM pg_database WHERE datname = '$name'"
    );

    if ($databaseExists) {
        return true;
    }

    // If not a database, check if it's a schema (for APP/CENTRAL_TENANT)
    return (bool) $this->database()->select(
        "SELECT schema_name FROM information_schema.schemata WHERE schema_name = '$name'"
    );
}
```

**If you break this, users will get "Database clinic_X does not exist" errors during sign-in.**

#### createDatabase() Behavior

The method creates different structures based on tenant flag:
- `FLAG_TENANT` -> `CREATE DATABASE "clinic_X"`
- `FLAG_CLUSTER` -> `CREATE SCHEMA "emr_2026"` in tenant database
- `FLAG_APP` / `FLAG_CENTRAL_TENANT` -> `CREATE SCHEMA "app_X"` in wellmed database

#### deleteDatabase() Behavior

Similar logic for deletion:
- `FLAG_TENANT` -> `DROP DATABASE "clinic_X"`
- `FLAG_CLUSTER` -> `DROP SCHEMA "emr_2026" CASCADE`
- Others -> `DROP SCHEMA "app_X" CASCADE`

## Directory Structure

```
src/
├── Commands/
│   ├── EnvironmentCommand.php      # Base command with migration configuration
│   ├── InstallMakeCommand.php      # klinik-starterpack:install command
│   ├── InstallSubmoduleCommand.php # Installs submodules
│   ├── MigrateCommand.php          # klinik-starterpack:migrate command
│   └── SeedCommand.php             # klinik-starterpack:seed command
│
├── Concerns/
│   └── HasComposer.php             # Trait for updating composer.json
│
├── Contracts/
│   └── PuskesmasStarterpack.php    # Interface extending DataManagement
│
├── Controllers/
│   └── API/
│       └── ApiController.php       # Base API controller
│
├── Database/
│   ├── Manager/
│   │   └── PostgreSQLSchemaManager.php  # CRITICAL: Multi-tenant DB manager
│   └── Seeders/
│       ├── DosageFormSeeder.php
│       ├── EmployeeSeeder.php
│       ├── EncodingSeeder.php
│       ├── FundingSeeder.php
│       ├── IcdSeeder.php
│       ├── ItemStuffSeeder.php
│       ├── OccupationSeeder.php
│       ├── PatientTypeSeeder.php
│       ├── PatientTypeServiceSeeder.php
│       ├── PermissionSeeder.php
│       ├── ProgramOccupationSeeder.php
│       └── data/
│           ├── countries.sql
│           ├── districts.sql
│           ├── diseases.sql
│           ├── provinces.sql
│           ├── subdistricts.sql
│           ├── permissions/          # Permission definitions
│           └── roles/                 # Role definitions (admin, dokter, perawat, etc.)
│
├── Enums/
│   ├── Item/
│   │   └── ItemStuff/
│   │       └── Flag.php             # Medical item enums (UNIT_SALES, etc.)
│   ├── ModuleService/
│   │   ├── McuManagement/
│   │   └── MedicServiceManagament/
│   └── TariffComponent/
│       └── Flag.php
│
├── Facades/
│   └── KlinikStarterpack.php
│
├── Providers/
│   ├── CommandServiceProvider.php   # Registers artisan commands
│   └── RouteServiceProvider.php
│
├── Routes/
│   └── api.php
│
├── Supports/
│   └── BaseKlinikStarterpack.php    # Base support class
│
├── helper.php                        # Helper functions (placeholder)
├── KlinikStarterpack.php            # Main package class
└── KlinikStarterpackServiceProvider.php  # Service provider
```

## Artisan Commands

### klinik-starterpack:install

Full installation command that:
1. Clears optimization cache
2. Publishes config and migrations
3. Runs migrations
4. Runs database seeders
5. Runs klinik-starterpack:seed

```bash
docker exec -it wellmed-backbone php artisan klinik-starterpack:install
docker exec -it wellmed-backbone php artisan klinik-starterpack:install --drop  # With database drop (disabled)
```

### klinik-starterpack:migrate

Runs migrations from `assets/database/migrations`:

```bash
docker exec -it wellmed-backbone php artisan klinik-starterpack:migrate
docker exec -it wellmed-backbone php artisan klinik-starterpack:migrate --seed  # With seeding
```

### klinik-starterpack:seed

Seeds the database with healthcare data:

```bash
docker exec -it wellmed-backbone php artisan klinik-starterpack:seed
docker exec -it wellmed-backbone php artisan klinik-starterpack:seed PermissionSeeder  # Specific seeder
```

## Key Classes

### PostgreSQLSchemaManager

**Location:** `src/Database/Manager/PostgreSQLSchemaManager.php`

**Implements:** `Stancl\Tenancy\Contracts\TenantDatabaseManager`

**Methods:**
- `createDatabase(TenantWithDatabase $tenant)` - Creates database or schema based on tenant flag
- `deleteDatabase(TenantWithDatabase $tenant)` - Drops database or schema
- `databaseExists(string $name)` - Checks if database OR schema exists (BOTH!)
- `makeConnectionConfig(array $baseConfig, string $databaseName)` - Configures connection search_path

### KlinikStarterpackServiceProvider

**Location:** `src/KlinikStarterpackServiceProvider.php`

Registers:
- Main class binding (`KlinikStarterpack`)
- Command service provider
- Configuration overrides on boot

### PermissionSeeder

**Location:** `src/Database/Seeders/PermissionSeeder.php`

Scans `data/permissions/` directory and seeds all permissions for healthcare roles.

## Enums

### Item\ItemStuff\Flag

Medical item classification enums:
- `UNIT_SALES` - Sales unit
- `MEDICAL_UNIT_SALES` - Medical sales unit
- `MEDICAL_UNIT_RECEIVED` - Received unit
- `MEDICAL_SKOK` - Package-based classification
- `MEDICAL_SKOS` - Dosage form-based classification
- `MEDICAL_SKOP` - Market-based classification
- `MEDICAL_NET_UNIT`, `MEDICAL_FREQ_UNIT`, etc.

## Seeder Data

### Roles (in `data/roles/`)
- admin, dokter, perawat, kepala-perawat
- bidan, farmasi, laboran, kepala-laboran
- radiografer, kepala-radiologi
- cashier, finance, front-office, hrd
- gudang-farmasi, gudang-inventaris
- operator, pustu, rekam-medis, udd

### Geographic Data (SQL files)
- `countries.sql` - Country data
- `provinces.sql` - Indonesian provinces
- `districts.sql` - Districts (kabupaten/kota)
- `subdistricts.sql` - Subdistricts (kecamatan)

### Medical Data
- `diseases.sql` - ICD disease codes

## Testing Changes to PostgreSQLSchemaManager

When modifying the database manager:

1. **Test TENANT-level sign-in:**
   ```bash
   # User should be able to sign in to a TENANT (clinic_4, clinic_5, etc.)
   # This tests the pg_database check in databaseExists()
   ```

2. **Test APP-level sign-in:**
   ```bash
   # User should be able to sign in to APP/CENTRAL_TENANT (app_2, group_3)
   # This tests the information_schema check in databaseExists()
   ```

3. **Test database creation:**
   ```bash
   # Creating a new TENANT should create a separate database
   # Creating a new APP should create a schema in wellmed
   ```

## Common Pitfalls

1. **Breaking databaseExists()** - Always check BOTH pg_database AND information_schema.schemata
2. **Wrong tenant flag handling** - FLAG_TENANT creates databases, others create schemas
3. **Forgetting Octane reload** - After changes, run `php artisan octane:reload`
4. **Missing tenant context** - Ensure tenant is properly initialized before database operations

## Related Files in Main Wellmed Project

- `config/micro-tenant.php` - Tenant database naming configuration
- `config/database.php` - Cluster schemas and search_path configuration
- `docker/pgbouncer/local/pgbouncer.ini` - PgBouncer wildcard routing for tenant databases
