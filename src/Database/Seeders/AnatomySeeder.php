<?php

namespace Hanafalah\KlinikStarterpack\Database\Seeders;

use Illuminate\Database\Seeder;

class AnatomySeeder extends Seeder{
    protected $__anatomy_model;

    public function run(){
        $this->__anatomy_model = app(config('database.models.Anatomy'));
        $morph = app(config('database.models.People'))->getMorphClass();

        //FOR ODONTO
        $i = 1;
        $anatomies = [
            [
                "name" => "Wisdom Tooth (3rd Molar)",
                "props" => ["element_id" => "Wisdom_Tooth_3rd_Molar_18","position"=>"upper", "ordering"=>$i++]
            ],
            [
                "name" => "Molar (2nd Molar)",
                "props" => ["element_id" => "Molar_2nd_Molar_17","position"=>"upper", "ordering"=>$i++]
            ],
            [
                "name" => "Molar (1st Molar)",
                "props" => ["element_id" => "Molar_1st_Molar_16","position"=>"upper", "ordering"=>$i++]
            ],
            [
                "name" => "Bicuspid (2nd)",
                "props" => ["element_id" => "Bicuspid_2nd_15","position"=>"upper", "ordering"=>$i++]
            ],
            [
                "name" => "Bicuspid (1st)",
                "props" => ["element_id" => "Bicuspid_1st_14","position"=>"upper", "ordering"=>$i++]
            ],
            [
                "name" => "Canine",
                "props" => ["element_id" => "Canine_13","position"=>"upper", "ordering"=>$i++]
            ],
            [
                "name" => "Incisor Lateral",
                "props" => ["element_id" => "Incisor_Lateral_12","position"=>"upper", "ordering"=>$i++]
            ],
            [
                "name" => "Incisor Central",
                "props" => ["element_id" => "Incisor_Central_11","position"=>"upper", "ordering"=>$i++]
            ],
            [
                "name" => "Incisor Central",
                "props" => ["element_id" => "Incisor_Central_21","position"=>"upper", "ordering"=>$i++]
            ],
            [
                "name" => "Incisor Lateral",
                "props" => ["element_id" => "Incisor_Lateral_22","position"=>"upper", "ordering"=>$i++]
            ],
            [
                "name" => "Canine",
                "props" => ["element_id" => "Canine_23","position"=>"upper", "ordering"=>$i++]
            ],
            [
                "name" => "Bicuspid (1st)",
                "props" => ["element_id" => "Bicuspid_1st_24","position"=>"upper", "ordering"=>$i++]
            ],
            [
                "name" => "Bicuspid (2nd)",
                "props" => ["element_id" => "Bicuspid_2nd_25","position"=>"upper", "ordering"=>$i++]
            ],
            [
                "name" => "Molar (1st Molar)",
                "props" => ["element_id" => "Molar_1st_Molar_26","position"=>"upper", "ordering"=>$i++]
            ],
            [
                "name" => "Molar (2nd Molar)",
                "props" => ["element_id" => "Molar_2nd_Molar_27","position"=>"upper", "ordering"=>$i++]
            ],
            [
                "name" => "Wisdom Tooth (3rd Molar)",
                "props" => ["element_id" => "Wisdom_Tooth_3rd_Molar_28","position"=>"upper", "ordering"=>$i++]
            ],
            [
                "name" => "Wisdom Tooth (3rd_Molar)",
                "props" => ["element_id" => "Wisdom_Tooth_3rd_Molar_38","position"=>"lower", "ordering"=>$i++]
            ],
            [
                "name" => "Molar (2nd Molar)",
                "props" => ["element_id" => "Molar_2nd_Molar_37","position"=>"lower", "ordering"=>$i++]
            ],
            [
                "name" => "Molar (1st Molar)",
                "props" => ["element_id" => "Molar_1st_Molar_36","position"=>"lower", "ordering"=>$i++]
            ],
            [
                "name" => "Bicuspid (2nd)",
                "props" => ["element_id" => "Bicuspid_2nd_35","position"=>"lower", "ordering"=>$i++]
            ],
            [
                "name" => "Bicuspid (1st)",
                "props" => ["element_id" => "Bicuspid_1st_34","position"=>"lower", "ordering"=>$i++]
            ],
            [
                "name" => "Canine",
                "props" => ["element_id" => "Canine_33","position"=>"lower", "ordering"=>$i++]
            ],
            [
                "name" => "Incisor Lateral",
                "props" => ["element_id" => "Incisor_Lateral_32","position"=>"lower", "ordering"=>$i++]
            ],
            [
                "name" => "Incisor Central",
                "props" => ["element_id" => "Incisor_Central_31","position"=>"lower", "ordering"=>$i++]
            ],
            [
                "name" => "Incisor Central",
                "props" => ["element_id" => "Incisor_Central_41","position"=>"lower", "ordering"=>$i++]
            ],
            [
                "name" => "Incisor Lateral",
                "props" => ["element_id" => "Incisor_Lateral_42","position"=>"lower", "ordering"=>$i++]
            ],
            [
                "name" => "Canine",
                "props" => ["element_id" => "Canine_43","position"=>"lower", "ordering"=>$i++]
            ],
            [
                "name" => "Bicuspind (1st)",
                "props" => ["element_id" => "Bicuspind_1st_44","position"=>"lower", "ordering"=>$i++]
            ],
            [
                "name" => "Bicuspid (2nd)",
                "props" => ["element_id" => "Bicuspid_2nd_45","position"=>"lower", "ordering"=>$i++]
            ],
            [
                "name" => "Molar (1st Molar)",
                "props" => ["element_id" => "Molar_1st_Molar_46","position"=>"lower", "ordering"=>$i++]
            ],
            [
                "name" => "Molar (2nd Molar)",
                "props" => ["element_id" => "Molar_2nd_Molar_37","position"=>"lower", "ordering"=>$i++]
            ],
            [
                "name" => "Wisdom Tooth (3rd Molar)",
                "props" => ["element_id" => "Wisdom_Tooth_3rd_Molar_48","position"=>"lower", "ordering"=>$i++]
            ],
            [
                "name" => "Molar (2nd Molar)",
                "props" => ["element_id" => "Molar_2nd_Molar_55","position"=>"upper", "ordering"=>$i++]
            ],
            [
                "name" => "Molar (1st Molar)",
                "props" => ["element_id" => "Molar_1st_Molar_54","position"=>"upper", "ordering"=>$i++]
            ],
            [
                "name" => "Canine",
                "props" => ["element_id" => "Canine_53","position"=>"upper", "ordering"=>$i++]
            ],
            [
                "name" => "Incisor Lateral",
                "props" => ["element_id" => "Incisor_Lateral_52","position"=>"upper", "ordering"=>$i++]
            ],
            [
                "name" => "Incisor Central",
                "props" => ["element_id" => "Incisor_Central_51","position"=>"upper", "ordering"=>$i++]
            ],
            [
                "name" => "Incisor Central",
                "props" => ["element_id" => "Incisor_Central_61","position"=>"upper", "ordering"=>$i++]
            ],
            [
                "name" => "Incisor Lateral",
                "props" => ["element_id" => "Incisor_Lateral_62","position"=>"upper", "ordering"=>$i++]
            ],
            [
                "name" => "Canine",
                "props" => ["element_id" => "Canine_63","position"=>"upper", "ordering"=>$i++]
            ],
            [
                "name" => "Molar (1st Molar)",
                "props" => ["element_id" => "Molar_1st_Molar_64","position"=>"upper", "ordering"=>$i++]
            ],
            [
                "name" => "Molar (2nd Molar)",
                "props" => ["element_id" => "Molar_2nd_Molar_65","position"=>"upper", "ordering"=>$i++]
            ],
            [
                "name" => "Molar (2nd Molar)",
                "props" => ["element_id" => "Molar_2nd_Molar_85","position"=>"lower", "ordering"=>$i++]
            ],
            [
                "name" => "Molar (1st Molar)",
                "props" => ["element_id" => "Molar_1st_Molar_84","position"=>"lower", "ordering"=>$i++]
            ],
            [
                "name" => "Canine",
                "props" => ["element_id" => "Canine_83","position"=>"lower", "ordering"=>$i++]
            ],
            [
                "name" => "Incisor Lateral",
                "props" => ["element_id" => "Incisor_Lateral_82","position"=>"lower", "ordering"=>$i++]
            ],
            [
                "name" => "Incisor Central",
                "props" => ["element_id" => "Incisor_Central_81","position"=>"lower", "ordering"=>$i++]
            ],
            [
                "name" => "Incisor Central",
                "props" => ["element_id" => "Incisor_Central_71","position"=>"lower", "ordering"=>$i++]
            ],
            [
                "name" => "Incisor Lateral",
                "props" => ["element_id" => "Incisor_Lateral_72","position"=>"lower", "ordering"=>$i++]
            ],
            [
                "name" => "Canine",
                "props" => ["element_id" => "Canine_73","position"=>"lower", "ordering"=>$i++]
            ],
            [
                "name" => "Molar (1st Molar)",
                "props" => ["element_id" => "Molar_1st_Molar_74","position"=>"lower", "ordering"=>$i++]
            ],
            [
                "name" => "Molar (2nd Molar)",
                "props" => ["element_id" => "Molar_2nd_Molar_75","position"=>"lower", "ordering"=>$i++]
            ]
        ];

        $form_odonto = app(config('database.models.Form'))->where('name','Odontogram')->first();

        foreach ($anatomies as $anatomy) {
            $props = $anatomy['props'];
            $model = $this->__anatomy_model->where([
                ['morph',$morph],
                ['name',$anatomy['name']]
            ])->whereJsonContains('props->element_id', $props['element_id'])->first();

            if (!isset($model)){
                $model = $this->__anatomy_model->create([
                    'morph' => $morph,
                    'name'  => $anatomy['name']
                ]);
                foreach ($props as $key => $prop) $model->{$key} = $prop;
                $model->save();
            }
            $form_odonto->formHasAnatomies()->firstOrCreate([
                'anatomy_id' => $model->getKey()
            ]);
        }

        $i = 1;
        $anatomies = [
            [
                "name" => "Kepala",
                "props" => [
                    "ordering" => $i++
                ]
            ],[
                "name" => "Leher",
                "props" => [
                    "ordering" => $i++
                ]
            ],
            [
                "name" => "Mata",
                "props" => [
                    "ordering" => $i++
                ]
            ],
            [
                "name" => "Telinga Luar",
                "props" => [
                    "ordering" => $i++
                ]
            ],
            [
                "name" => "Hidung Luar",
                "props" => [
                    "ordering" => $i++
                ]
            ],
            [
                "name" => "Tenggorokan",
                "props" => [
                    "ordering" => $i++
                ]
            ],
            [
                "name" => "Mulut",
                "props" => [
                    "ordering" => $i++
                ]
            ],
            [
                "name" => "Thorax",
                "props" => [
                    "ordering" => $i++
                ]
            ],
            [
                "name" => "Jantung",
                "props" => [
                    "ordering" => $i++
                ]
            ],
            [
                "name" => "Paru",
                "props" => [
                    "ordering" => $i++
                ]
            ],
            [
                "name" => "Mamae",
                "props" => [
                    "ordering" => $i++
                ]
            ],
            [
                "name" => "Abdomen",
                "props" => [
                    "ordering" => $i++
                ]
            ],
            [
                "name" => "Ekstremitas Atas",
                "props" => [
                    "ordering" => $i++
                ]
            ],
            [
                "name" => "Ekstremitas Bawah",
                "props" => [
                    "ordering" => $i++
                ]
            ],
            [
                "name" => "Kulit",
                "props" => [
                    "ordering" => $i++
                ]
            ]
        ];

        $form_htt = app(config('database.models.Form'))->where('name','Pemeriksaan Fisik')->first();
        $form_htt->anatomies()->detach();
        foreach ($anatomies as $anatomy) {
            $props = $anatomy['props'];

            $anatomy_model = $this->__anatomy_model->firstOrCreate([
                'morph' => $morph,
                'name'  => $anatomy['name']
            ]);

            if (isset($props)){
                foreach ($props as $key => $prop) $anatomy_model->{$key} = $prop;
                $anatomy_model->save();
            }

            $form_htt->formHasAnatomies()->firstOrCreate([
                'anatomy_id' => $anatomy_model->getKey()
            ]);
        }
    }
}