<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerCPModel extends Model 
{
    protected $table = 'customer_contact_person';

    protected $fillable = ['first_name','last_name','no_ktp','no_telp','address','email'];
}
