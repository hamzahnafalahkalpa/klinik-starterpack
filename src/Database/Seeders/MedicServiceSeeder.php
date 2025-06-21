<?php

namespace Hanafalah\KlinikStarterpack\Database\Seeders;

use Hanafalah\LaravelSupport\Concerns\Support\HasRequestData;
use Hanafalah\ModuleMedicService\Contracts\Data\MedicServiceData;
use Hanafalah\ModuleMedicService\Enums\Label;
use Illuminate\Database\Seeder;

class MedicServiceSeeder extends Seeder
{
    use HasRequestData;

    public function run()
    {
        $arr = [
            [
                'name' => 'Rawat Jalan',
                'flag' => 'MedicService','label' => Label::OUTPATIENT->value,
                'childs' => [
                    ['name' => 'Umum', 'flag' => 'MedicService','label' => Label::OUTPATIENT->value],
                    ['name' => 'Orthopedi', 'flag' => 'MedicService','label' => Label::OUTPATIENT->value],
                    ['name' => 'Sunat', 'flag' => 'MedicService','label' => Label::OUTPATIENT->value],
                    ['name' => 'Kecantikan', 'flag' => 'MedicService','label' => Label::OUTPATIENT->value],
                    ['name' => 'Mata', 'flag' => 'MedicService','label' => Label::OUTPATIENT->value],
                    ['name' => 'THT', 'flag' => 'MedicService','label' => Label::OUTPATIENT->value],
                    ['name' => 'Penyakit Dalam', 'flag' => 'MedicService','label' => Label::OUTPATIENT->value],
                    ['name' => 'Gigi & Mulut', 'flag' => 'MedicService','label' => Label::OUTPATIENT->value],
                    ['name' => 'KIA', 'flag' => 'MedicService','label' => Label::OUTPATIENT->value],
                    ['name' => 'Lansia', 'flag' => 'MedicService','label' => Label::OUTPATIENT->value],
                    ['name' => 'Admin', 'flag' => 'MedicService','label' => Label::OUTPATIENT->value],
                    ['name' => 'Vaccine', 'flag' => 'MedicService','label' => Label::OUTPATIENT->value],
                    ['name' => 'MTBS', 'flag' => 'MedicService','label' => Label::OUTPATIENT->value]
                ]
            ],
            [
                'name' => 'Laboratorium Klinik',
                'flag' => 'MedicService','label' => Label::LABORATORY->value,
                'childs' => [
                    ['name' => 'Patalogi Klinik', 'flag' => 'MedicService','label' => Label::LABORATORY->value],
                    ['name' => 'Patalogi Anatomi', 'flag' => 'MedicService','label' => Label::LABORATORY->value],
                ]
            ],
            ['name' => 'Medical Check Up', 'flag' => 'MedicService','label' => Label::MCU->value],
            ['name' => 'Radiologi', 'flag' => 'MedicService','label' => Label::RADIOLOGY->value],
            ['name' => 'Rawat Inap', 'flag' => 'MedicService','label' => Label::INPATIENT->value],
            ['name' => 'Administrasi', 'flag' => 'MedicService','label' => Label::ADMINISTRATION->value],
            [
                'name' => 'Kefarmasian',
                'flag' => 'MedicService',
                'label' => Label::PHARMACY->value,
                'childs' => [
                    ['name' => 'Instalasi Farmasi', 'flag' => 'MedicService','label' => Label::PHARMACY_UNIT->value],
                    ['name' => 'Gudang Farmasi', 'flag' => 'MedicService','label' => Label::PHARMACY->value],
                ]
            ],
            ['name' => 'Persalinan', 'flag' => 'MedicService','label' => Label::VERLOS_KAMER->value],
            ['name' => 'Instalasi Gawat Darurat' , 'flag' => 'MedicService','label' => Label::EMERGENCY_UNIT->value],
        ];
        foreach ($arr as $data) {
            app(config('app.contracts.MedicService'))->prepareStoreMedicService($this->requestDTO(MedicServiceData::class,$data));
        }
    }
}
