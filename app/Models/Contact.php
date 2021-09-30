<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $table = "contacts";

    protected $fillable = [
        "adresse",
        "phone",
        "email",
        "logo1",
        "logo2",
        "logo3"
    ];
}
