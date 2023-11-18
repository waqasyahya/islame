<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blogpage extends Model
{
    public function blogpost()
    {
        return $this->hasOne(blogpost::class, 'id', 'blogpost_id');
    }
   
    use HasFactory;
}
