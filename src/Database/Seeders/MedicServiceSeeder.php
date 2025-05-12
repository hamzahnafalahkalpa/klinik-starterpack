<?php

namespace Hanafalah\KlinikStarterpack\Database\Seeders;

use Hanafalah\ModuleMedicService\Enums\MedicServiceFlag;
use Hanafalah\ModuleMedicService\ModuleMedicService;
use Illuminate\Database\Seeder;

class MedicServiceSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $arr = [
            [
                "name" => "Rawat Jalan",
                "flag" => MedicServiceFlag::OUTPATIENT,
                'props' => ['text-color' => '#000', 'color' => '#87CEEB', 'color' => '#87CEEB','jurnal' => [
                    "product" => [
                        "name" => "Pendapatan - Poly",
                        "code" => "14451931"
                    ],
                ]],
                'childs' => [
                    ["name" => "Klinik Umum", "flag" => MedicServiceFlag::OUTPATIENT],
                    ["name" => "Klinik Orthopedi", "flag" => MedicServiceFlag::OUTPATIENT],
                    ["name" => "Klinik Mata", "flag" => MedicServiceFlag::OUTPATIENT],
                    ["name" => "Klinik THT", "flag" => MedicServiceFlag::OUTPATIENT],
                    ["name" => "Klinik Penyakit Dalam", "flag" => MedicServiceFlag::OUTPATIENT],
                    ["name" => "Klinik Gigi & Mulut", "flag" => MedicServiceFlag::OUTPATIENT],
                    ["name" => "Klinik Kesehatan Ibu dan Anak (KIA)", "flag" => MedicServiceFlag::OUTPATIENT],
                    ["name" => "Lansia", "flag" => MedicServiceFlag::OUTPATIENT],
                    ['name' => 'Admin', 'flag' => MedicServiceFlag::OUTPATIENT, 'props' => ['text-color' => '#000', 'color' => '#E5E5EA']],
                    ["name" => "Vaccine", "flag" => MedicServiceFlag::OUTPATIENT,"props" => ['jurnal' => [
                        "product" => [
                            "name" => "Pendapatan - Vaksin & Khusus",
                            "code" => "14451932"
                        ]]]
                    ]
                ]
            ],
            ["name" => "Medical Check Up", "flag" => MedicServiceFlag::MCU,'props' => ['text-color' => '#000', 'color' => '#C7B8EA','jurnal' => [
                "product" => [
                    "name" => "Pendapatan - Kontrak MCU",
                    "code" => "14451930"
                ]
            ]]],
            [
                "name" => "Laboratorium Klinik",
                "flag" => MedicServiceFlag::LABORATORY,
                'props' => ['text-color' => '#000', 'color' => '#C6E2B5'],
                'childs' => [
                    ["name" => "Patalogi Klinik", "flag" => MedicServiceFlag::LABORATORY],
                    ["name" => "Patalogi Anatomi", "flag" => MedicServiceFlag::LABORATORY],
                ]
            ],
            ["name" => "Radiologi", "flag" => MedicServiceFlag::RADIOLOGY, 'props' => ['text-color' => '#000', 'color' => '#FFD7BE']],
            ["name" => "Rawat Inap", "flag" => MedicServiceFlag::INPATIENT],
            ["name" => "Administrasi", "flag" => MedicServiceFlag::ADMINISTRATION],
            [
                "name" => "Kefarmasian",
                "flag" => MedicServiceFlag::PHARMACY,
                'childs' => [
                    ["name" => "Instalasi Farmasi", "flag" => MedicServiceFlag::PHARMACY],
                    ["name" => "Gudang Farmasi", "flag" => MedicServiceFlag::PHARMACY],
                ]
            ],
            ["name" => "Persalinan", "flag" => MedicServiceFlag::VERLOS_KAMER],
            ["name" => "Instalasi Gawat Darurat" , "flag" => MedicServiceFlag::EMERGENCY_UNIT],
        ];
        ModuleMedicService::useMedicService()->setGuard('name',true)->adds($arr);
    }
}
