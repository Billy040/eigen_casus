<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['name', 'email'];

    public function internshipPositions()
    {
        return $this->hasMany(Internship_position::class);        
    }
}
