<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function internshipPositions()
    {
        return $this->hasMany(Internship_position::class);        
    }
}
