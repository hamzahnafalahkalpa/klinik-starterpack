<?php

namespace Hanafalah\KlinikStarterpack\Database\Seeders;

use Hanafalah\LaravelSupport\Concerns\Support\HasRequestData;
use Illuminate\Database\Seeder;

class ClassRoomSeeder extends Seeder{
    use HasRequestData;

    protected $datas = [
        [
            'name' => 'Reguler',
            'daily_rate' => 100000,
        ],
        [
            'name' => 'VIP',
            'daily_rate' => 150000,
        ],
        [
            'name' => 'VVIP',
            'daily_rate' => 250000,
        ],
        [
            'name' => 'BPJS I',
            'daily_rate' => 250000,
        ],
        [
            'name' => 'BPJS II',
            'daily_rate' => 150000,
        ],
        [
            'name' => 'BPJS III',
            'daily_rate' => 100000,
        ]
    ];

    public function run()
    {
        foreach (['Rawat Inap', 'Persalinan'] as $service_name){
            $service = app(config('database.models.Service'))->where('name', $service_name)->first();
            if (isset($service)){
                foreach ($this->datas as $data) {
                    $data['service_id'] = $service->getKey();
                    app(config('app.contracts.ClassRoom'))->prepareStoreClassRoom(
                        $this->requestDTO(config('app.contracts.ClassRoomData'), $data)
                    );
                }
            }
        }
    }
}
