<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class read extends Model
{
    public function detail()
    {
        return $this->hasMany(detaillesson::class, 'id', 'detaillesson_id');
    }
    use HasFactory;
}
