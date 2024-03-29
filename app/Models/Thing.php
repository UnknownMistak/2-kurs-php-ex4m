<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thing extends Model
{
    use HasFactory;

    public function usemodel(){
        return $this->belongsTo(UseModel::class);
    }
}
