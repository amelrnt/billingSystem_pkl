<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(0,15) as $i) {
            # code...
            DB::table('account_manager')->insert([
                'first_name' => $faker->firstName(),
                'last_name' => $faker->lastName(),
                'phone_number' => $faker->phoneNumber(),
                'email' => $faker->email()
            ]);
        }

        for ($i=2; $i < 20; $i++) { 
            DB::table('customer_contact_person')->insert(
            [
                'first_name' => $faker->firstName(),
                'last_name' => $faker->lastName(),
                'no_ktp' => $faker->numerify('################'),
                'npwp' => $faker->numerify('###############'),
                'email' => $faker->email(),
                'address' => $faker->streetAddress(),
                'Customer_id' => $i
            ]
            );
        }

        DB::table('customer')->insert(
            [
                'company' => 'PT Maju Bersama',
                'phone_number' => '03415678066',
                'address' => 'Sumbersari',
                'city' => 'Malang',
                'district' => 'Lowokwaru',
                'email' => 'example@mail.com',
                'type' => 'PERDAGANGAN KECIL'
            ]
        );

        foreach (range(0,20) as $i) {
            DB::table('customer')->insert(
                [
                    'company' => $faker->company(),
                    'phone_number' => $faker->phoneNumber(),
                    'address' => $faker->streetAddress(),
                    'city' => $faker->city(),
                    'district' => $faker->streetSuffix(),
                    'email' => $faker->companyEmail(),
                    'type' => $faker->word()
                ]
            );
        }

        DB::table('produk')->insert(
            [
                'name' => 'Omni Channel Contact Center',
                'price' => '120000',
                'desc' => 'testing seeder',
                'status' => '1'
            ]
        );

        DB::table('produk')->insert(  
            [
                'name' => 'CRM Analytics',
                'price' => '100000',
                'desc' => 'testing seeder',
                'status' => '1'
            ]
        );

        DB::table('produk')->insert(
            [
                'name' => 'Order Management System',
                'price' => '95000',
                'desc' => 'testing seeder',
                'status' => '1'
            ]
        );

        DB::table('produk')->insert(
            [
                'name' => 'Enterprise Data Center',
                'price' => '145000',
                'desc' => 'testing seeder',
                'status' => '1',
                'created_at' => '2021-02-11 10:35:34'
            ]
        );
        
        DB::table('contract')->insert(
            [
                'no_surat' => '12345/XYZ/1122021/003',
                'start_date' => '2020-01-01',
                'end_date' => '2020-09-01',
                'payment_status' => '',
                'payment_bank' => '',
                'bank_account_id' => '',
                'bank_account_name' => '',
                'Account_Manager_id' => '4',
                'Produk_idProduk' => '5',
                'Customer_id' => '1'
            ]
        );

        DB::table('contract')->insert(
            [
                'no_surat' => '12345/XYZ/1122021/002',
                'start_date' => '2021-02-15',
                'end_date' => '2021-12-01',
                'payment_status' => '1',
                'payment_bank' => 'BCA',
                'bank_account_id' => '3469876543456',
                'bank_account_name' => 'Amelia',
                'Account_Manager_id' => '7',
                'Produk_idProduk' => '2',
                'Customer_id' => '3'
            ]
        );
        
        DB::table('contract')->insert(
            [
                'no_surat' => '12345/XYZ/1122021/009',
                'start_date' => '2021-01-01',
                'end_date' => '2021-05-20',
                'payment_status' => '',
                'payment_bank' => '',
                'bank_account_id' => '',
                'bank_account_name' => '',
                'Account_Manager_id' => '5',
                'Produk_idProduk' => '4',
                'Customer_id' => '9'
            ]
        );
    }
}
