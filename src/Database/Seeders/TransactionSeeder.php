<?php

namespace Hanafalah\KlinikStarterpack\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Zahzah\ModulePatient\Enums\VisitPatient\VisitStatus;
use Zahzah\ModulePatient\Enums\VisitRegistration\RegistrationStatus;

class TransactionSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $patients = app(config("database.models.Patient"))->take(10)->get();
        DB::beginTransaction();
        try {
            $payer_id = 2;
            $agent_id = 3;
            $mcu_category_id = 1;
            $mcu_package_id = 24;
            $invoice_code = "INV-000001";

            foreach ($patients as $key => $patient) {
                $transaction = app(config("database.models.Transaction"));
                $transactionItem = app(config("database.models.TransactionItem"));
                $visitPatient = app(config("database.models.VisitPatient"));
                $visitRegistration = app(config("database.models.VisitRegistration"));
                $service = app(config("database.models.Service"));
                $serviceItem = app(config("database.models.ServiceItem"));
                $mcuCategory = app(config("database.models.McuCategory"));
                $invoice = app(config("database.models.Invoice"));
                $paymentSummary = app(config("database.models.PaymentSummary"));
                $paymentDetail = app(config("database.models.PaymentDetail"));
                $invoice = $invoice->where('invoice_code', $invoice_code)->first();
                $visit_patient = [
                    'patient_id' => $patient->id,
                    'visited_at' => now(),
                    'status' => VisitStatus::ACTIVE
                ];
                $modelVisitPatient = $visitPatient->create($visit_patient);
                $visitPatient->modelHasOrganization()->createMany([
                    ['organization_id' => $payer_id],
                    ['organization_id' => $agent_id],
                ]);
                // Payment Summary
                $parent = $paymentSummary->create([
                    'transaction_id' => null,
                    'reference_type' => 'Invoice',
                    'reference_id' => $invoice->id,
                    'total_amount' => 100000,
                    'total_discount' => 0,
                    'total_debt' => 0,
                    'total_tax' => 0,
                    'total_additional' => 0,
                ]);
                $paymentSummary = $paymentSummary->create([
                    'transaction_id' => $transaction->where('reference_type','VisitPatient')->where('reference_id', $modelVisitPatient->id)->first()->id,
                    'reference_type' => 'VisitPatient',
                    'reference_id' => $modelVisitPatient->id,
                    'total_amount' => 0,
                    'total_discount' => 0,
                    'total_debt' => 0,
                    'total_tax' => 0,
                    'total_additional' => 0,
                    'parent_id' => $parent->id,
                ]);
                $transactionItem = $transactionItem->create([
                    'transaction_id' => $transaction->where('reference_type','VisitPatient')->where('reference_id', $modelVisitPatient->id)->first()->id,
                    'reference_type' => 'RMTreatment',
                    'reference_id' => 1,
                    'item_type' => 'Service',
                    'item_id' => 10,
                    'item_name' => 'Jasa Dokter',
                    'status' => 0
                ]);
                $paymentDetail->create([
                    'payment_summary_id' => $paymentSummary->id,
                    'transaction_item_id' => $transactionItem->id,
                    'amount' => 100000,
                    'debt' => 0,
                    'tax' => 0,
                    'additional' => 0,
                ]);

                $visit_registration = [
                    'visit_patient_id' => $modelVisitPatient->id,
                    'medic_service_id' => "631", // MCU
                    'patient_type_id' => 2, // UMUM
                    'status' => RegistrationStatus::DRAFT
                ];
                $visitRegistration = $visitRegistration->create($visit_registration);
                $visitRegistration->medic_service = $service->find(631)->name;
                $visitRegistration->save();
                $visitRegistration->modelHasService()->createMany([
                    ['service_id' => $service->where('reference_type', $mcuCategory->getMorphClass())->where('reference_id', $mcu_category_id)->first()->getKey()],
                    ['service_id' => $serviceItem->find($mcu_package_id)->reference_id]
                ]);
            }
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }

    }
}
