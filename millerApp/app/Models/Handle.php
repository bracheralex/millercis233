<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Handle extends Model

{
    protected $fillable = ['social_name', 'name', 'profile_id'];

    public function profile() {
        return $this ->belongsTo(Profile::class);
    }
    
}