<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detaillesson extends Model
{
    public function Guaideness()
    {
        return $this->hasMany(Guaideness::class,'id','detaillesson_id');
    }
    use HasFactory;
}
