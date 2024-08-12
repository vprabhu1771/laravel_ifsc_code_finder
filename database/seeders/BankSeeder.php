<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Bank;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $banks = [
            [
                'name' => 'State Bank of India',
                'short_name' => 'SBI'
            ],
            [
                'name' => 'HDFC Bank',
                'short_name' => 'HDFC'
            ],
            [
                'name' => 'ICICI Bank',
                'short_name' => 'ICICI'
            ],
            [
                'name' => 'Axis Bank',
                'short_name' => 'Axis'
            ],
            [
                'name' => 'Kotak Mahindra Bank',
                'short_name' => 'Kotak'
            ],
        ];

        foreach ($banks as $bank) {
            Bank::create($bank);
        }
    }
}
