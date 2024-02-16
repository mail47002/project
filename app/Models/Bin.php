<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bin extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    public function Media()
    {
        return $this->morphMany('App\Models\Media', 'mediable');
    }
    public function userAction()
    {
        return $this->hasMany(UserAction::class);
    }
    public function log()
    {
        return $this->hasMany(Log::class);
    }
    public function binReportProblem()
    {
        return $this->hasMany(BinReportProblem::class);
    }
    public function binReportLocation()
    {
        return $this->hasMany(BinReportLocation::class);
    }
    public function binBag()
    {
        return $this->hasMany(BinBag::class);
    }
    public function binUser()
    {
        return $this->hasMany(BinUser::class);
    }
    public function location()
    {
        return $this->belongsTo(Location::class);
    }
}
