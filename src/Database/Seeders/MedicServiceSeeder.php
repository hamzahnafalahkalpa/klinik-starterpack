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
                'flag' => 'MEDIC_SERVICE','label' => Label::OUTPATIENT->value,
                'childs' => [
                    ['name' => 'Umum', 'flag' => 'MEDIC_SERVICE','label' => Label::OUTPATIENT->value],
                    ['name' => 'Orthopedi', 'flag' => 'MEDIC_SERVICE','label' => Label::OUTPATIENT->value],
                    ['name' => 'Sunat', 'flag' => 'MEDIC_SERVICE','label' => Label::OUTPATIENT->value],
                    ['name' => 'Kecantikan', 'flag' => 'MEDIC_SERVICE','label' => Label::OUTPATIENT->value],
                    ['name' => 'Mata', 'flag' => 'MEDIC_SERVICE','label' => Label::OUTPATIENT->value],
                    ['name' => 'THT', 'flag' => 'MEDIC_SERVICE','label' => Label::OUTPATIENT->value],
                    ['name' => 'Penyakit Dalam', 'flag' => 'MEDIC_SERVICE','label' => Label::OUTPATIENT->value],
                    ['name' => 'Gigi & Mulut', 'flag' => 'MEDIC_SERVICE','label' => Label::OUTPATIENT->value],
                    ['name' => 'KIA', 'flag' => 'MEDIC_SERVICE','label' => Label::OUTPATIENT->value],
                    ['name' => 'Lansia', 'flag' => 'MEDIC_SERVICE','label' => Label::OUTPATIENT->value],
                    ['name' => 'Admin', 'flag' => 'MEDIC_SERVICE','label' => Label::OUTPATIENT->value],
                    ['name' => 'Vaccine', 'flag' => 'MEDIC_SERVICE','label' => Label::OUTPATIENT->value],
                    ['name' => 'MTBS', 'flag' => 'MEDIC_SERVICE','label' => Label::OUTPATIENT->value]
                ]
            ],
            [
                'name' => 'Laboratorium Klinik',
                'flag' => 'MEDIC_SERVICE','label' => Label::LABORATORY->value,
                'childs' => [
                    ['name' => 'Patalogi Klinik', 'flag' => 'MEDIC_SERVICE','label' => Label::LABORATORY->value],
                    ['name' => 'Patalogi Anatomi', 'flag' => 'MEDIC_SERVICE','label' => Label::LABORATORY->value],
                ]
            ],
            ['name' => 'Medical Check Up', 'flag' => 'MEDIC_SERVICE','label' => Label::MCU->value],
            ['name' => 'Radiologi', 'flag' => 'MEDIC_SERVICE','label' => Label::RADIOLOGY->value],
            ['name' => 'Rawat Inap', 'flag' => 'MEDIC_SERVICE','label' => Label::INPATIENT->value],
            ['name' => 'Administrasi', 'flag' => 'MEDIC_SERVICE','label' => Label::ADMINISTRATION->value],
            [
                'name' => 'Kefarmasian',
                'flag' => 'MEDIC_SERVICE',
                'label' => Label::PHARMACY->value,
                'childs' => [
                    ['name' => 'Instalasi Farmasi', 'flag' => 'MEDIC_SERVICE','label' => Label::PHARMACY_UNIT->value],
                    ['name' => 'Gudang Farmasi', 'flag' => 'MEDIC_SERVICE','label' => Label::PHARMACY->value],
                ]
            ],
            ['name' => 'Persalinan', 'flag' => 'MEDIC_SERVICE','label' => Label::VERLOS_KAMER->value],
            ['name' => 'Instalasi Gawat Darurat' , 'flag' => 'MEDIC_SERVICE','label' => Label::EMERGENCY_UNIT->value],
        ];
        foreach ($arr as $data) {
            app(config('app.contracts.MedicService'))->prepareStoreMedicService($this->requestDTO(MedicServiceData::class,$data));
        }
    }
}
