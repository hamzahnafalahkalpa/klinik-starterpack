<?php

namespace Hanafalah\KlinikStarterpack\Database\Seeders;

use Hanafalah\ModuleItem\Models\ItemStuff;
use Hanafalah\KlinikStarterpack\Enums\Item\ItemStuff\Flag;
use Illuminate\Database\Seeder;

class ItemStuffSeeder extends Seeder{
    private $__item_stuff;

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->__item_stuff = app(config('database.models.ItemStuff', ItemStuff::class));

        $unit_items = [
            Flag::MEDICAL_FREQ_UNIT->value => [
                'Injeksi','Kaplet','Kapsul','Oles','Sachet',
                'ml','Suppositoria','Tablet','Tetes','Puyer','Sendok'
            ],
            Flag::MEDICAL_UNIT_SALES->value => [
                'Ampul','Botol','Dus','Kaleng','Kaplet','Kapsul',
                'Lembar','Pack','Pcs','Roll','Blister','Tablet','Vial','Tube','Sachet','Unit',
                'Pouch','Flask'
            ],
            Flag::MEDICAL_SKOS->value => [
                'Aerosol','Ekstrak Bubuk','Ekstrak Cair','Emulsi','Gel',
                'Imunoserum','Implan','Inhalasi','Irigasi','Kaplet','Kapsul',
                'Krim','Larutan/Sirup','Pasta','Plester','Pulveres','Pulvis','Salep',
                'Tetes Mata','Suppositoria','Suspensi','Tablet','Vaksin','Kapsul Lunak',
                'Kaplet Salut Film','Tablet Effervescent','Tablet Pelepasan Terkontrol',
                'Tablet Salut Enterik','Pil','Tablet Salut Selaput','Granul','Salep Mata',
                'Elixir','Drops','Suspensi Kering','Lotion/Solution','Injeksi',
                'Injeksi Suspensi Kering','Tetes Hidung','Tetes Telinga','Infus',
                'Nasal Spray','Rectal Tube','Tablet Kunyah','Tablet Dispersi'
            ],
            Flag::MEDICAL_SKOK->value => [
                'Obat Bebas',
                'Obat Bebas Terbatas',
                'Obat Bebas Terbatas P.No.1',
                'Obat Bebas Terbatas P.No.2',
                'Obat Bebas Terbatas P.No.3',
                'Obat Bebas Terbatas P.No.4',
                'Obat Bebas Terbatas P.No.5',
                'Obat Bebas Terbatas P.No.6',
                'Obat Keras',
                'Obat Luar',
                'Jamu',
                'Narkotika',
                'Obat Herbal',
                'Obat Herbal Standar',
                'Psikotropika',
                'Vito Farmaka'
            ],
            Flag::MEDICAL_UNIT_RECEIVED->value => [
                'Box', 'Dus', 'Container'
            ],
            Flag::MEDICAL_NET_UNIT->value => [
                'l','ml','g','mg','mcL','Tablet','Kaplet','Kapsul','Lembar','Pcs'
            ],
            Flag::MEDICAL_SKOP->value => [
                'Generik Berlogo', 'Generik Bermerk/Paten'
            ],
            Flag::MEDICAL_USAGE_ROUTE->value => [
                'Rektal','Sublingual','Parenteral','Langung ke Organ',
                'Selaput Perut','Topikal','Vaginal','Nasal','Okular',
                'Inhalasi','Oral','IM/IV','IM/SC','Topikal Kulit','IM','IV',
                'Topikal Mata','Topikal Telinga','Cair Luar','IM/IV/SC',
                'Topikal Mulut','Oral/Inhalasi','Oral/Sublingual/Vaginal'
            ],
            Flag::MEDICAL_USAGE_LOCATION->value => [
                'Obat Luar', 'Obat Minum'
            ],
            Flag::MEDICAL_THERAPEUTIC_CLASS->value => [
                'Agen Radiografi & Diagnostik',
                'Alergi dan Sistem Imun' => [
                    'Antihistamin dan Antialergi',
                    'Imunosupresan',
                    'Vaksin, Antiserum, dan Imunologikal'
                ],
                'Anti Infeksi (Sistemik)' => [
                    'Aminoglikosida',
                    'Antelmintik',
                    'Antiamuba',
                    'Antibiotik Golongan Lain',
                    'Antijamur',
                    'Antilepra',
                    'Antimalaria',
                    'Antivirus',
                    'Betalaktam Golongan Lain',
                    'Kloramfenikol',
                    'Kombinasi Antibakterial',
                    'Kuinolon',
                    'Makrolid',
                    'Obat Anti Protozoa dan Golongan Lain',
                    'Obat Antituberkulosis',
                    'Penisilin',
                    'Sefalosporin',
                    'Sulfonamid',
                    'Tetrasiklin',
                ],
                'Antidotum & Zat Detoksifikasi Untuk Terapi Ketergantungan Zat' => [
                    'Antidotum dan Obat Detoksifiaksi',
                    'Obat Untuk Terapi Ketergantungan Zat',
                ],
                'Hormon' => [
                    'Androgen dan Preparat Sintetiknya',
                    'Estrogen dan Progesteron Serta Preparat Sintetiknya',
                    'Hormon - Hormon Tropik dan Preparat Sintetiknya',
                    'Hormon Kortikosteroid',
                    'Kombinasi Hormon - Hormon Kelamin',
                    'Obat Lain yang Mempengaruhi Regulasi Hormonal',
                    'Preparat Anabolik'
                ],
                'Kontrasepsi' => [
                    'Kontrasepsi Lain',
                    'Kontrasepsi Oral',
                    'Kontrasepsi Suntik',
                ],
                'Lartuan Intravena & Larutan Steril Lain',
                'Mata' => [
                    'Antiinfeksi dan Antiseptik Mata',
                    'Antiseptik Mata Dengan Kortikosteroid',
                    'Kortikosteroid Mata',
                    'Obat Dekongestan, Anestesi, Antiinflamasi Mata',
                    'Obat Midriatikum',
                    'Obat Miotikom',
                    'Pelumas Mata',
                    'Preparat Antiglaukoma',
                    'Preparat Mata Golongan Lain',
                ],
                'Nutrisi' => [
                    'Elektrolit',
                    'Produk Nutrisi Bayi',
                    'Produk Nutrisi Parenteral',
                    'Produk Nutrisi/Enteral',
                ],
                'Obat Anestesi, Sediaan Bedah, dan Perawatan Luka' => [
                    'Anestesi Lokal dan Umum',
                    'Kasa Penutup Luka dan Perawatan Luka',
                    'Obat Penghambat Neuromuskular',
                ],
                'Onkologi' => [
                    'Imunoterapi Kanker',
                    'Kemoterapi Sitotoksik',
                    'Perawatan Suportif',
                    'Terapi Hormon Untuk Kanker',
                    'Terapi Target Untuk Kanker',
                ],
                'Perawatan Kulit &amp; Diri' => [
                    'Emolien, Pembersih Kulit, dan Pelindung Kulit',
                    'Perawatan Diri',
                    'Perawatan Rongga Mulut',
                ],
                'Produk Terapeutik Lain',
                'Sistem Endokrin &amp; Metabolik' => [
                    'Hormon Tiroid',
                    'Obat Antidiabetes',
                    'Obat Antiobesitas',
                    'Obat Antitiroid',
                    'Obat Metabolisme Golongan Lain',
                    'Obat Metabolisme Tulang',
                    'Preparat Insulin',
                ],
                'Sistem Gastrointestinal &amp; Hepatobilier' => [
                    'Antasid, Obat Antirefluks, dan Antiulserasi',
                    'Antidiare',
                    'Antiemetik',
                    'Antispasmodik',
                    'Digestan',
                    'Kolagogum, Kolelitolitik, dan Hepatoprotektor',
                    'Laksatif, Pencahar',
                    'Obat Gastrointestinal Lain',
                    'Preparat Anorektal',
                    'Regulator GIT Antiflatulen & Antiinflamasi'
                ],
                'Sistem Kardiovaskular &amp; Hematopoietik' => [
                    'Antagonis Angiotensin II',
                    'Antagonis Kalsium',
                    'Antidiuretik',
                    'Antihipertensi Golongan Lain',
                    'Antikoagulan, Antiplatelet, dan Fibrinolitik (Trombolitik)',
                    'Diuretik',
                    'Hemostatik',
                    'Obat AntianginaAC Inhibitor/Direct Renin Inhibitor',
                    'Obat Dislipidemia',
                    'Obat Hematopoietik',
                    'Obat Hemorheologi',
                    'Obat Jantung',
                    'Obat Kardiovaskular Golongan Lain',
                    'Penyekat Beta',
                    'Preparat Flebitis, dan Varises',
                    'Vasodilator Perifer dan Aktivator Serebral',
                    'Vasokonstriktor'
                ],
                'Sistem Kemih Kelamin' => [
                    'Antiseptik Saluran Kemih',
                    'Obat Saluran Kemih Kelamin Golongan Lain',
                    'Obat Untuk Disfungsi Ereksi dan Gangguan Ejakulasi',
                    'Obat Untuk Penyakit Saluran Kemih dan Prostat',
                    'Obat yang Bekerja Pada Uterus',
                    'Preparat Untuk Masalah Vagina'
                ],
                'Sistem Muskuloskeletal' => [
                    'Disease - Modifying Anti - Reumatic Drugs (DMARD)',
                    'Enzim Antiinflamasi',
                    'Obat Gangguan Neuromuskular',
                    'Obat Hiperurisemia dan Gout',
                    'Obat Lain yang Bekerja Pada Sistem Muskuloskeletal',
                    'Relaksan Otot'
                ],
                'Sistem Pernapasan' => [
                    'Dekongestan Nasal dan Preparat Nasal Lain',
                    'Obat Batuk dan Pilek',
                    'Obat Sistem Pernapasan Golongan Lain',
                    'Preparat Antiasma dan PPOK',
                    'Stimulan Saluran Pernapasan'
                ],
                "Sistem Saraf Pusat" => [
                    'Analgesik (Non Opiat) dan Antipiretik',
                    'Analgesik (Opiat',
                    'Ansiolitik',
                    'Antidepresan',
                    'Antikonvulsan',
                    'Antipsikotik',
                    'Hipnotik dan Sedativa',
                    'Nootropik dan Neurotonik/Neurotropik',
                    'Obat Anti Parkinson',
                    'Obat Anti Vertigo',
                    'Obat Antiinflamasi Non Steroid (OAINS',
                    'Obat Penyakit Neurodegeneratif',
                    'Obat SSP Golongan Lain dan Obat ADHD',
                    'Obat Untuk Nyeri Neuropatik',
                    'Preparat Antimigren',
                ],
                'Suplemen Kesehatan &amp; Makanan' => [
                    'Perangsa Nafsu Makan',
                    'Produk Kesehatan Komplementer Lain',
                    'Suplemen dan Terapi Penunjang',
                ],
                'Telinga & Mulut/Tenggorokan' => [
                    'Antiinfeksi dan Antiseptik Telinga',
                    'Antiseptik Telinga dan Kortikosteroid',
                    'Kortikosteroid Telinga',
                    'Obat Antiinfeksi Orofaring',
                    'Obat Untuk Tukak dan Inflamasi Rongga Mulut',
                    'Preparat Telinga Golongan Lain',
                ],
                'Terapi Untuk Kulit' => [
                    'Antibiotik Topikal',
                    'Antihistamin/Antipruritus Topikal',
                    'Antiinfeksi Topikal Dengan Kortikosteroid',
                    'Antijamur dan Antiparasit Topikal',
                    'Antiseptik dan Desinfektan Kulit',
                    'Antivirus Topikal',
                    'Kortikosteroid Topikal',
                    'Obat Kulit Lain',
                    'Obat Kutil dan Kapalan (Kalus)',
                    'Preparat Akne',
                    'Preparat Psoriasis, Seboroik, dan Iktiosis',
                ],
                'Vitamin &amp; Mineral' => [
                    'Kalsium/Dengan Vitamin',
                    'Vitamin A, D, dan E',
                    'Vitamin B Kompleks/Dengan Vitamin C',
                    'Vitamin C',
                    'Vitamin dan Mineral (Geriatrik)',
                    'Vitamin dan Mineral (Pediatrik)',
                    'Vitamin dan Mineral (Untuk Masa Hamil dan Nifas)/Antianemia',
                    'Vitamin dan/atau Mineral',
                ]
            ],
            Flag::MEDICAL_COMPOSITION_UNIT->value => [
                '%','mcL','mg/ml','g','ml','mg','mcg','IU'
            ],
            Flag::MEDICAL_MIX_PRESCRIPTION_UNIT->value => [
                'Puyer','Sirup','Salep','Emulsi',
                'Suspensi','Bedak','Kapsul','Gel','Larutan','Krim'  
            ]
        ];
        $this->createUit($unit_items);

    }

    private function createUit($unit_items,$parent_id=null){
        foreach ($unit_items as $key => $units) {
            foreach ($units as $unit_key => $unit) {
                if (is_array($unit)){
                    $itemStuff = $this->__item_stuff->firstOrCreate([
                        'parent_id' => $parent_id,
                        'flag'      => $key,
                        'name'      => $unit_key
                    ]);
                    $this->createUit([$key => $unit],$itemStuff->getKey());
                }else{
                    $this->__item_stuff->firstOrCreate([
                        'parent_id' => $parent_id,
                        'flag'      => $key,
                        'name'      => $unit
                    ]);
                }
            }
        }
    }
}
