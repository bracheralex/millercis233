<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model

{

    protected $fillable = ['first_name', 'last_name', 'email', 'phone_number', 'updated_at', 'created_at'];
}