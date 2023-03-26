<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class workOrder extends Model
{
    use HasFactory;

    public function maintenanceRequest(){
        return $this->belongsTo(maintenanceRequest::class);
    }
}
