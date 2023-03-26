<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class maintenanceRequest extends Model
{
    use HasFactory;

    public function personalData(){
        return $this->belongsTo(personalData::class);
    }

    public function workOrder(){
        return $this->hasOne(workOrder::class);
    }
}
