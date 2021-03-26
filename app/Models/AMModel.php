<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AMModel extends Model 
{
    protected $table = 'account_manager';

    protected $fillable = ['first_name', 'last_name', 'email', 'phone_number'];
}
