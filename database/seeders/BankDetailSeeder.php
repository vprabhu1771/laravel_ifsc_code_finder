<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Country;
use App\Models\State;
use App\Models\City;

use App\Models\Bank;
use App\Models\BankDetail;

class BankDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $countries = Country::all();
        
        $states = State::all();
        
        $cities = City::all();

        $banks = Bank::all();

        $bankDetails = [
            [
                'bank_id' => $banks->where('short_name', 'SBI')->first()->id,
                'ifsc_code' => 'SBIN0001234',
                'micr_code' => '000002345',
                'address' => '123 Main St, Chennai',
                'branch' => 'Chennai Branch',
                'phone_number' => '044-12345678',
                'branch_code' => '001',
                'zipcode' => '600001',
                'country_id' => $countries->where('name', 'India')->first()->id,
                'state_id' => $states->where('name', 'Tamil Nadu')->first()->id,
                'city_id' => $cities->where('name', 'Chennai')->first()->id,
            ],
            [
                'bank_id' => $banks->where('short_name', 'HDFC')->first()->id,
                'ifsc_code' => 'HDFC0005678',
                'micr_code' => '000005678',
                'address' => '456 Second St, Chennai',
                'branch' => 'Chennai Branch',
                'phone_number' => '044-23456789',
                'branch_code' => '002',
                'zipcode' => '600002',
                'country_id' => $countries->where('name', 'India')->first()->id,
                'state_id' => $states->where('name', 'Tamil Nadu')->first()->id,
                'city_id' => $cities->where('name', 'Chennai')->first()->id,
            ],
            [
                'bank_id' => $banks->where('short_name', 'ICICI')->first()->id,
                'ifsc_code' => 'ICIC0009123',
                'micr_code' => '000009123',
                'address' => '789 Third St, Chennai',
                'branch' => 'Chennai Branch',
                'phone_number' => '044-34567890',
                'branch_code' => '003',
                'zipcode' => '600003',
                'country_id' => $countries->where('name', 'India')->first()->id,
                'state_id' => $states->where('name', 'Tamil Nadu')->first()->id,
                'city_id' => $cities->where('name', 'Chennai')->first()->id,
            ],
            [
                'bank_id' => $banks->where('short_name', 'Axis')->first()->id,
                'ifsc_code' => 'AXIS0003456',
                'micr_code' => '000034567',
                'address' => '101 Fourth St, Chennai',
                'branch' => 'Chennai Branch',
                'phone_number' => '044-45678901',
                'branch_code' => '004',
                'zipcode' => '600004',
                'country_id' => $countries->where('name', 'India')->first()->id,
                'state_id' => $states->where('name', 'Tamil Nadu')->first()->id,
                'city_id' => $cities->where('name', 'Chennai')->first()->id,
            ],
            [
                'bank_id' => $banks->where('short_name', 'Kotak')->first()->id,
                'ifsc_code' => 'KOTK0007890',
                'micr_code' => '000078900',
                'address' => '202 Fifth St, Chennai',
                'branch' => 'Chennai Branch',
                'phone_number' => '044-56789012',
                'branch_code' => '005',
                'zipcode' => '600005',
                'country_id' => $countries->where('name', 'India')->first()->id,
                'state_id' => $states->where('name', 'Tamil Nadu')->first()->id,
                'city_id' => $cities->where('name', 'Chennai')->first()->id,
            ],
        ];

        foreach ($bankDetails as $detail) {
            BankDetail::create($detail);
        }
    }
}
