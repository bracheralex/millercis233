<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Handle extends Model

{
    protected $fillable = ['social_name', 'name', 'profile_id'];


    // protected $fillable = ['first_name', 'last_name', 'email', 'phone_number', 'updated_at', 'created_at'];

    public function profile() {
        return $this ->belongsTo(Profile::class);
    }
    
}