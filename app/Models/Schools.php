<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schools extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function student() {
        return $this->hasMany(Students::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
