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
                'name' => 'CASH'
            ],
            [
                'name' => 'BANK TRANSFER'
            ],
            [
                'name' => 'CREDIT CARD'
            ],
            [
                'name' => 'DEBIT CARD'
            ],
            [
                'name' => 'E-MONEY'
            ],
            [
                'name' => 'DITAGIHKAN'
            ],
        ];
        $paymentMethod = app(config('database.models.PaymentMethod'));

        foreach ($arr as $data) {
            $paymentMethod->firstOrCreate($data);
        }

    }
}
