<?php

namespace Hanafalah\KlinikStarterpack\Database\Seeders;

use Hanafalah\LaravelSupport\Concerns\Support\HasRequestData;
use Hanafalah\ModuleMedicService\Contracts\Data\ServiceClusterData;
use Illuminate\Database\Seeder;

class ServiceClusterSeeder extends Seeder
{
    use HasRequestData;

    public function run()
    {
        $arr = [
            [
                'name'  => 'Kluster 1',
                'flag'  => 'SERVICE_CLUSTER',
                'label' => 'KLUSTER 1',
            ],
            [
                'name' => 'Kluster 2',
                'flag' => 'SERVICE_CLUSTER',
                'label' => 'KLUSTER 2',
                'childs' => [
                    ['name' => 'Ibu hamil, bersalin, dan nifas', 'flag' => 'SERVICE_CLUSTER','label' => 'IBU HAMIL BERSALIN NIFAS'],
                    ['name' => 'Balita dan anak pra sekolah', 'flag' => 'SERVICE_CLUSTER','label' => 'BALITA ANAK PRA SEKOLAH'],
                    ['name' => 'Anak usia sekolah dan remaja (5 - 18 thn)', 'flag' => 'SERVICE_CLUSTER','label' => 'ANAK USIA SEKOLAH DAN REMAJA'],
                ]
            ],
            [
                'name' => 'Kluster 3',
                'flag' => 'SERVICE_CLUSTER',
                'label' => 'KLUSTER 3',
                'childs' => [
                    ['name' => 'Pelayanan kesehatan usia dewasa (19 - 59  thn)', 'flag' => 'SERVICE_CLUSTER','label' => 'KESEHATAN USIA DEWASA'],
                    ['name' => 'Pelayanan kesehatan lansia (> 60 thn)', 'flag' => 'SERVICE_CLUSTER','label' => 'KESEHATAN LANSIA'],
                ]
            ],
            [
                'name'  => 'Kluster 4',
                'flag'  => 'SERVICE_CLUSTER',
                'label' => 'KLUSTER 4',
            ],
            [
                'name'  => 'Luar Gedung',
                'flag'  => 'SERVICE_CLUSTER',
                'label' => 'PELAYANAN LUAR GEDUNG',
            ]
        ];
        foreach ($arr as $data) {
            app(config('app.contracts.ServiceCluster'))->prepareStoreServiceCluster($this->requestDTO(ServiceClusterData::class,$data));
        }
    }
}
