<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MasterData\ConfigPayment;
use Illuminate\Support\Facades\DB;

class ConfigPaymentSeeder extends Seeder
{
    public function run()
    {
        // Create data here
        $config_payment = [
            [
                'fee' => '150000',
                'vat' => '20', // vat is percentage
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];

        // This array $config_payment will be inserted into the 'config_payment' table
        ConfigPayment::insert($config_payment);
    }
}