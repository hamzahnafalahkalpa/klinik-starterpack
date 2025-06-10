<?php

namespace Hanafalah\KlinikStarterpack\Database\Seeders;
use Hanafalah\LaravelSupport\Concerns\Support\HasRequest;
use Hanafalah\ModulePatient\Contracts\Data\PatientTypeData;
use Illuminate\Database\Seeder;

class PatientTypeSeeder extends Seeder
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
                'flag'  => 'IDENTITY',
                'label' => 'UMUM'
            ],
            [
                'name'  => 'Karyawan',
                'flag'  => 'IDENTITY',
                'label' => 'KARYAWAN'
            ],
            [
                'name'  => 'Member',
                'flag'  => 'IDENTITY',
                'label' => 'MEMBER'
            ],
                        [
                'name'  => 'Crew',
                'flag'  => 'IDENTITY',
                'label' => 'CREW'
            ],
                        [
                'name'  => 'Partner',
                'flag'  => 'IDENTITY',
                'label' => 'PARTNER'
            ],
        ];
        foreach ($arr as $data) {
            app(config('app.contracts.PatientType'))->prepareStorePatientType($this->requestDTO(PatientTypeData::class,$data));
        }
    }
}
