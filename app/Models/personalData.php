<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class personalData extends Model
{
    use HasFactory;

    public function user(){
        return $this->hasOne(user::class);
    }

    public function maintenanceRequest(){
        return $this->hasMany(maintenanceRequest::class);
    }
}
