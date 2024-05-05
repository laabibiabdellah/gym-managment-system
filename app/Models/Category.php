<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['nom_categorie'];

    // categorie user relationship
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
