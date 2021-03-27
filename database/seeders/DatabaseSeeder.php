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
        DB::table('account_manager')->insert([
            'first_name' => 'Ahmad',
            'last_name' => 'Rohmi',
            'phone_number' => '0812368014123',
            'email' => 'example@mail.com'
        ]);
        DB::table('account_manager')->insert([
            'first_name' => 'Cassandra',
            'last_name' => 'Mertz',
            'phone_number' => '1-763-882-4886',
            'email' => 'dolores08@hotmail.com'
        ]);
        DB::table('account_manager')->insert([
            'first_name' => 'Johathan',
            'last_name' => 'Bednar',
            'phone_number' => '(350) 655-3392',
            'email' => 'werner46@hotmail.com'
        ]);
        DB::table('account_manager')->insert([
            'first_name' => 'Frederic',
            'last_name' => 'Collier',
            'phone_number' => '718.774.5755',
            'email' => 'gino54@hotmail.com'
        ]);
        DB::table('account_manager')->insert([
            'first_name' => 'Orpha',
            'last_name' => 'Ortiz',
            'phone_number' => '1-784-845-5810',
            'email' => 'leonard27@hilpert.com'
        ]);
        DB::table('account_manager')->insert([
            'first_name' => 'Elyssa',
            'last_name' => 'Treutel',
            'phone_number' => '+1-252-373-4022',
            'email' => 'senger.trenton@kling.com'
        ]);
        DB::table('account_manager')->insert([
            'first_name' => 'Alexandrea',
            'last_name' => 'Glover',
            'phone_number' => '+1-252-373-4022',
            'email' => 'shany08@gmail.com'
        ]);


        DB::table('customer_contact_person')->insert(
            [
                'first_name' => '',
                'last_name' => '',
                'no_ktp' => '',
                'npwp' => '',
                'email' => '',
                'address' => '',
                'Customer_id' => ''
            ]
            );

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

        DB::table('customer')->insert(
            [
                'company' => 'PT Maju Bersama',
                'phone_number' => '03415678066',
                'address' => 'Sumbersari',
                'city' => 'Malang',
                'district' => 'Klojen',
                'email' => 'example@mail.com',
                'type' =>'PERDAGANGAN KECIL'
            ]
        );
        DB::table('customer')->insert(
            [
                'company' => 'Abernathy-Conroy',
                'phone_number' => '+1-878-281-2464',
                'address' => '12715 Bosco Summit',
                'city' => 'Gleichnerstad',
                'district' => 'Rue',
                'email' => 'pbahringer@dicki.org',
                'type' =>'aut'
            ]
        );
        DB::table('customer')->insert(
            [
                'company' => 'Stark, Emard and Cormier',
                'phone_number' => '1-561-401-6873',
                'address' => '1-587-322-7134',
                'city' => '576 Mckenna Shores Suite 117',
                'district' => 'South Drewburgh',
                'email' => 'grant.margret@hane.net',
                'type' =>'nobis'
            ]
        );
        DB::table('customer')->insert(
            [
                'company' => 'Runte, Cummerata and Reilly',
                'phone_number' => '1-561-401-6873',
                'address' => '8930 McKenzie Camp',
                'city' => 'West Kyler',
                'district' => 'Ramp',
                'email' => 'efay@dach.info',
                'type' =>'odio'
            ]
        );
        DB::table('customer')->insert(
            [
                'company' => 'Dare, Cummings and Mante',
                'phone_number' => '+1.942.720.7532',
                'address' => '75203 Immanuel Cove Suite 525',
                'city' => 'East Tysonshire',
                'district' => 'Vista',
                'email' => 'cole.stamm@jenkins.com',
                'type' =>'maxime'
            ]
        );

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
                'Customer_id' => '4'
            ]
        );
    }
}
