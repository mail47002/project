<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BinUser extends Model
{
    use HasFactory;
    protected $primaryKey = "id";

    public function bin()
    {
        return $this->belongsTo(Bin::class);
    }
    public function user()
    {
        return $this->belongsTo(user::class);
    }
}
