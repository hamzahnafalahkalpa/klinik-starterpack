<?php

namespace Hanafalah\KlinikStarterpack\Database\Seeders;
use Hanafalah\LaravelSupport\Concerns\Support\HasRequest;
use Hanafalah\ModulePatient\Contracts\Data\PatientTypeData;
use Illuminate\Database\Seeder;

class PatientTypeServiceSeeder extends Seeder
{
    use HasRequest;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $arr = [
            [
                'name'  => 'Umum',
                'flag'  => 'SERVICE',
                'label' => 'UMUM'
            ],
            [
                'name'  => 'BPJS Kelas I',
                'flag'  => 'SERVICE',
                'label' => 'BPJS'
            ],
            [
                'name'  => 'BPJS Kelas II',
                'flag'  => 'SERVICE',
                'label' => 'BPJS'
            ],
            [
                'name'  => 'BPJS Kelas III',
                'flag'  => 'SERVICE',
                'label' => 'BPJS'
            ],
            [
                'name'  => 'Asuransi',
                'flag'  => 'SERVICE',
                'label' => 'ASURANSI'
            ]
        ];
        foreach ($arr as $data) {
            app(config('app.contracts.PatientType'))->prepareStorePatientType($this->requestDTO(PatientTypeData::class,$data));
        }
    }
}
