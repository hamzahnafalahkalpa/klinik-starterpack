<?php

namespace Database\Seeders;

use Gii\ModuleMedicService\Models\MedicService;
use Illuminate\Database\Seeder;
use Gii\ModuleService\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Array data yang akan di-seed
        $arr = [
            [
                "name" => "Rawat Jalan",
                'childs' => [
                    ["name" => "Klinik Umum"],
                    ["name" => "Klinik Gigi & Mulut"],
                    ["name" => "Klinik Kesehatan Ibu dan Anak (KIA)"],
                    ["name" => "Klinik Umum"],
                    ["name" => "Lansia"],
                    ["name" => "MTBS"],
                ]
            ],
            ["name" => "Medical Check Up"],
            ["name" => "Laboratorium Klinik"],
            ["name" => "Patalogi Klinik"],
            ["name" => "Rawat Inap", "flag" => "INPATIENT"],
            ["name" => "Administrasi"],
            ["name" => "Instalasi Farmasi"],
            ["name" => "Persalinan"],
            ["name" => "Persalinan (VK)", "flag" => "VK"],
            ["name" => "Gudang Farmasi"],
            ["name" => "Instalasi Gawat Darurat"],
        ];

        // Fungsi rekursif untuk menambahkan data ke dalam tabel
        $this->rekursi($arr);
    }

    private function rekursi(array $arr, $parentId = null)
    {
        foreach ($arr as $data) {
            $medicService = MedicService::on('microtenant_2')->create([
                "name"   => $data['name'],
                "status" => 0,
                "flag"   => isset($data['flag']) ? $data['flag'] : "MEDIC_SERVICE",
            ]);

            $service      = Service::on('microtenant_2')->create([
                'name'           => $data['name'],
                'parent_id'      => $parentId,
                'reference_id'   => $medicService->id,
                "reference_type" => "MedicService",
            ]);

            if (isset($data['childs']) && count($data['childs']) > 0) {
                $this->rekursi($data['childs'], $service->id);
            }
        }
    }
}
