<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model

{

        public function profiles(){
        return $this->hasMany(Profile::class);
    }

    public function user() {
        return $this ->belongsTo(User::class);
    }

    public function handles(){
        return $this->hasMany(Handle::class);
    }

}