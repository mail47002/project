<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BinReportProblem extends Model
{
    use HasFactory;

    public function bin()
    {
        return $this->belongsTo(Bin::class);
    }
    public function problem()
    {
        return $this->belongsTo(Problem::class);
    }
}
