<?php

namespace Hanafalah\KlinikStarterpack\Database\Seeders;

use Illuminate\Database\Seeder;

class PaymentMethodSeeder extends Seeder
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
                'name' => 'CASH',
                'flag' => 'TUNAI',
            ],
            [
                'name' => 'BANK TRANSFER',
                'flag' => 'NON TUNAI',
            ],
            [
                'name' => 'CREDIT CARD',
                'flag' => 'NON TUNAI',
            ],
            [
                'name' => 'DEBIT CARD',
                'flag' => 'NON TUNAI',
            ],
            [
                'name' => 'E-MONEY',
                'flag' => 'NON TUNAI',
            ],
            [
                'name' => 'DITAGIHKAN',
                'flag' => 'BILLED',
            ],
        ];
        $paymentMethod = app(config('database.models.PaymentMethod'));

        foreach ($arr as $data) {
            $paymentMethod->firstOrCreate($data);
        }

    }
}
