<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class people extends Model
{
    use HasFactory;

    public function provinces()
    {
        return $this->belongsTo(provinces::class,'province_id','id');
    }
}