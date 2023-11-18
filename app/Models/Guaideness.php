<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guaideness extends Model
{
    public function practic()
    {
        return $this->hasOne(practic::class,'id','detaillesson_id');
    }
    use HasFactory;
}
