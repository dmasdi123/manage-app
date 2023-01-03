<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriesProject extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(CategoriesProject::class);
    }

    public function project()
    {
        return $this->hasMany(Project::class);
    }

    public function revision()
    {
        return $this->hasMany(Revision::class);
    }

    public function report()
    {
        return $this->hasMany(Report::class);
    }
}
