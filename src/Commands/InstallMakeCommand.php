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
    protected $signature = 'klinik-starterpack:install';


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

        $this->call('micro:install',[
            "--skip-generate" => true
        ]);

        // $this->call('klinik-starterpack:install-submodule');
        // $this->info('✔️  Submodule installed');

        $username = env('DB_USERNAME');
        $password = env('DB_PASSWORD');

        putenv("DB_USERNAME=root");
        putenv("DB_PASSWORD=".env('DB_ROOT_PASSWORD'));
    
        config(['database.connections.mysql.username' => 'root']);
        config(['database.connections.mysql.password' => env('DB_ROOT_PASSWORD')]);
    
        // Jalankan perintah CREATE USER
        DB::statement("CREATE USER IF NOT EXISTS '$username'@'%' IDENTIFIED BY '$password'");
        DB::statement("GRANT ALL PRIVILEGES ON *.* TO '$username'@'%' WITH GRANT OPTION");
        DB::statement("FLUSH PRIVILEGES");

        $this->call('down');
        $this->call('migrate');
        $this->call('db:seed');
        $this->call('up');
        $this->call('klinik-starterpack:seed');

        $this->call('tenants:migrate');

        $this->comment('hanafalah\\klinik-starterpack installed successfully.');
    }
}
