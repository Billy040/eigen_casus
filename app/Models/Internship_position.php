<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Internship_position extends Model
{
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
