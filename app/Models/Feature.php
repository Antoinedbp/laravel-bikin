<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;

    protected $table = "features";

    protected $fillable = [
        "image",
        "titre",
        "sous-titre",
        "description1",
        "description2",
        "description3"
    ];
}
