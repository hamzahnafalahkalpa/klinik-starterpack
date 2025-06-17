<?php

namespace Hanafalah\KlinikStarterpack\Database\Seeders;

use Hanafalah\LaravelSupport\Concerns\Support\HasRequestData;
use Hanafalah\ModuleWarehouse\Contracts\Data\BuildingData;
use Hanafalah\ModuleWarehouse\Contracts\Data\RoomData;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class InfrastructureSeeder extends Seeder
{
    use HasRequestData;
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $building = $this->schema('Building',BuildingData::class,[
            'name' => 'Gedung Baru'
        ]);
        $this->schema('Room',RoomData::class,[

        ]);

        app(config('app.contracts.Room'))->prepareStoreBuilding($this->requestDto(RoomData::class),[
            'name' => 'Gedung Baru'
        ]);
    }

    private function schema($entity,$dto,$attributes): Model{
        return app(config('app.contracts.'.$entity))->{'prepareStore'.$entity}($this->requestDto($dto),$attributes);
    }
}