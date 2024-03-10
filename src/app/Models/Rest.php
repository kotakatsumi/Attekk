<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rest extends Model
{
    use HasFactory;

    protected $fillable = ['time_id', 'break_in', 'break_out'];

    public function time()
    {
        $this->belongsTo(Time::class);
    }
}
