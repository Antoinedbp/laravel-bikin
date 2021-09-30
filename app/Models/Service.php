<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table = "services";

    protected $fillable = [
       "logo1",
       "titre1",
       "description1",
       "logo2",
       "titre2",
       "description2",
       "logo3",
       "titre3",
       "description3",
       "logo4",
       "titre4",
       "description4",
    ];
}
