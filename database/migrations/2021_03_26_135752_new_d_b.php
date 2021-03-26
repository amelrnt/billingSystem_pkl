<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NewDB extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company', 45)->nullable();
            $table->string('phone_number', 45)->nullable();
            $table->string('address', 45)->nullable();
            $table->string('city', 45)->nullable();
            $table->string('district', 45)->nullable();
            $table->string('email', 45)->nullable();
            $table->string('type', 45)->nullable();
            $table->enum('status', array('1', '0'))->default('1');
            $table->timestamps();
        });

        Schema::create('customer_contact_person', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name', 45)->nullable();
            $table->string('last_name', 45)->nullable();
            $table->string('no_ktp', 45)->nullable();
            $table->string('no_telp', 45)->nullable();
            $table->string('email', 45)->nullable();
            $table->string('address', 45)->nullable();
            $table->string('email', 45)->nullable();
            $table->enum('status', array('1', '0'))->default('1');
            $table->timestamps();
            $table->integer('Customer_id')->unsigned();
        });

        Schema::create('produk', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 45)->nullable();
            $table->integer('price');
            $table->string('desc', 100)->nullable();
            $table->enum('status', array('1', '0'))->default('1');
            $table->timestamps();
        });

        Schema::create('user', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username', 45)->nullable();
            $table->string('password', 45)->nullable();
            $table->enum('status', array('1', '0'))->default('1');
            $table->timestamps();
        });

        Schema::create('account_manager', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name', 45)->nullable();
            $table->string('last_name', 45)->nullable();
            $table->string('phone_number', 45)->nullable();
            $table->string('email', 45)->nullable();
            $table->enum('status', array('1', '0'))->default('1');
            $table->timestamps();
        });

        Schema::create('contract', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_surat', 45)->nullable();
            $table->date('start_date');
            $table->date('end_date');
            $table->enum('payment_status', array('1', '0'))->default('0');
            $table->string('payment_bank', 45)->nullable();
            $table->string('bank_account_id', 45)->nullable();
            $table->string('bank_account_name', 45)->nullable();
            $table->timestamps();
            $table->integer('Account_Manager_id')->unsigned();
            $table->integer('Produk_idProduk')->unsigned();
            $table->integer('Customer_id')->unsigned();
        });

        Schema::table('contract', function (Blueprint $table) {
            $table->foreign('Account_Manager_id')->references('id')->on('account_manager');
            $table->foreign('Produk_idProduk')->references('id')->on('produk');
            $table->foreign('Customer_id')->references('id')->on('customer');
        });

        Schema::table('customer_contact_person', function (Blueprint $table) {
            $table->foreign('Customer_id')->references('id')->on('customer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
