<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeuxiemeSection extends Model
{
    use HasFactory;

    protected $table = "deuxieme_sections";

    protected $fillable = [
        "chemin",
        "logo",
        "titre",
        "description"
    ];
}
