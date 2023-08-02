<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function software()
    {
        return $this->belongsToMany(Software::class)->withTimestamps();
    }

    public function artists()
    {
        return $this->belongsToMany(Artist::class)->withTimestamps();
    }

    public function files()
    {
        return $this->hasMany(File::class);
    }
}
