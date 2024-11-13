<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = ["name", "description", "location"];

    /** @use HasFactory<\Database\Factories\TeamFactory> */
    use HasFactory;

    public function members()
    {
        return $this->hasMany(Person::class);
    }
}
