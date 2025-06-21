<?php

namespace Hanafalah\KlinikStarterpack\Database\Seeders;

use Hanafalah\LaravelSupport\Concerns\Support\HasRequestData;
use Hanafalah\ModulePayment\Contracts\Data\PaymentMethodData;
use Illuminate\Database\Seeder;

class PaymentMethodSeeder extends Seeder
{
    use HasRequestData;

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
                'flag' => 'PaymentMethod',
                'label' => 'TUNAI',
            ],
            [
                'name' => 'BANK TRANSFER',
                'flag' => 'PaymentMethod',
                'label' => 'NON TUNAI',
            ],
            [
                'name' => 'CREDIT CARD',
                'flag' => 'PaymentMethod',
                'label' => 'NON TUNAI',
            ],
            [
                'name' => 'DEBIT CARD',
                'flag' => 'PaymentMethod',
                'label' => 'NON TUNAI',
            ],
            [
                'name' => 'E-MONEY',
                'flag' => 'PaymentMethod',
                'label' => 'NON TUNAI',
            ],
            [
                'name' => 'DITAGIHKAN',
                'flag' => 'PaymentMethod',
                'label' => 'BILLED',
            ],
        ];
        $paymentMethod = app(config('app.contracts.PaymentMethod'));
        foreach ($arr as $data) $paymentMethod->prepareStorePaymentMethod($this->requestDTO(PaymentMethodData::class,$data));
    }
}
