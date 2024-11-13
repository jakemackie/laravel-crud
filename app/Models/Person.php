<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable = ["name", "age", "bio"];

    /** @use HasFactory<\Database\Factories\PersonFactory> */
    use HasFactory;

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
