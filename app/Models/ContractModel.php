<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContractModel extends Model
{
    use HasFactory;

    protected $table = 'contract';

    protected $fillable = ['no_surat','start_date','end_date','payment_status','payment_bank','bank_account_id', 'bank_account_name', 'Account_Manager_id', 'Produk_idProduk', 'Customer_id'];
}
