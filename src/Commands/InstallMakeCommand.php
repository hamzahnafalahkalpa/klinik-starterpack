<?php

namespace Hanafalah\KlinikStarterpack\Commands;

use Hanafalah\KlinikStarterpack\Concerns\HasComposer;
use Illuminate\Support\Facades\DB;

class InstallMakeCommand extends EnvironmentCommand
{
    use HasComposer;
    
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'klinik-starterpack:install
                            {--drop : Drop database before installing}';


    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command is used for initial installation of this module';

    private $modules = [
        
    ];

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->call('optimize:clear');
        
        if ($this->option('drop')) {
            $this->comment('Drop database...');
            try {
                $default = config('database.default','pgsql');
                DB::statement("DROP DATABASE IF EXISTS " . config('database.connections.'.$default.'.database'));
            } catch (\Exception $e) {
                $this->warn('Error when drop database: ' . $e->getMessage());
            }
        }
        
        $this->call('micro:install',[
            "--skip-generate" => true
        ]);

        $provider = 'Hanafalah\KlinikStarterpack\KlinikStarterpackServiceProvider';
        $this->comment('Installing Module...');
        $this->callSilent('vendor:publish', [
            '--provider' => $provider,
            '--tag'      => 'config'
        ]);
        $this->info('✔️  Created config/klinik-starterpack.php');

        $this->callSilent('vendor:publish', [
            '--provider' => $provider,
            '--tag'      => 'migrations'
        ]);
        $this->info('✔️  Created migrations');

        $this->call('klinik-starterpack:install-submodule');
        $this->info('✔️  Submodule installed');

        $username = env('DB_USERNAME');
        $password = env('DB_PASSWORD');
        $database = env('DB_DATABASE');

        putenv("DB_USERNAME=root");
        putenv("DB_PASSWORD=".env('DB_ROOT_PASSWORD'));
    
        config(['database.connections.mysql.username' => 'root']);
        config(['database.connections.mysql.password' => env('DB_ROOT_PASSWORD')]);
    
        // Jalankan perintah CREATE USER
        DB::statement(<<<SQL
            DO \$\$
            BEGIN
            IF NOT EXISTS (
                SELECT FROM pg_catalog.pg_roles WHERE rolname = '$username'
            ) THEN
                EXECUTE format('CREATE ROLE %I LOGIN PASSWORD %L', '$username', '$password');
            END IF;
            END
            \$\$;
        SQL);
        DB::statement("GRANT ALL PRIVILEGES ON DATABASE \"$database\" TO \"$username\";");

        $this->call('down');
        $this->call('migrate');
        $this->call('db:seed');
        $this->call('up');
        $this->call('klinik-starterpack:seed');
        $this->call('klinik:migrate');

        $this->comment('hanafalah\\klinik-starterpack installed successfully.');
    }
}
