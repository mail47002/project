<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bag extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    public function binBag()
    {
        return $this->hasMany(BinBag::class);
    }
    
}
