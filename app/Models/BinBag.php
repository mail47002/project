<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BinBag extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
   
    public function bin()
    {
        return $this->belongsTo(Bin::class);
    }
    public function bag()
    {
        return $this->belongsTo(Bag::class);
    }
}
