<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Internship_position extends Model
{
    protected $fillable = ['name', 'description', 'available', 'company_id'];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
