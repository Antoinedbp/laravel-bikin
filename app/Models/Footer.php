<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;

    
    protected $table = "footers";

    protected $fillable = [
        "adresse",
        "email",
        "phone",
        "linkTitre1",
        "linkTitre2",
        "link1",
        "link2",
        "link3",
        "link4",
        "link5",
        "link6",
        "link7",
        "link8",
        "link9",
        "link10",
        "description",
        "titre"
    ];
}
