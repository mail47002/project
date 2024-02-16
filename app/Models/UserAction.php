<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAction extends Model
{
    use HasFactory;

    public function Media()
    {
        return $this->morphMany('App\Models\Media', 'mediable');
    }
    public function bin()
    {
        return $this->belongsTo(Bin::class);
    }
    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
