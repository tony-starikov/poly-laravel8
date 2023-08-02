<?php

namespace App\Models;

use App\Traits\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory, Translatable;

    protected $guarded = [];

    public function fields()
    {
        return $this->belongsToMany(Field::class)->withTimestamps();
    }
}
