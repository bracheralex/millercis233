<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model

{

    // protected $fillable = ['name', 'email', 'password'];

    public function user() {
        return $this ->belongsTo(User::class);
    }

    public function handles(){
        return $this->hasMany(Handle::class);
    }
    
}