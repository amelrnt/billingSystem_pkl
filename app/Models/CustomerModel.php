<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerModel extends Model 
{
    protected $table = 'customer';

    protected $fillable = ['company','phone_number','address','city','district','email','type'];
}
