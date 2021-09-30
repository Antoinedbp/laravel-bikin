<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    protected $table = "portfolios";

    protected $fillable = [
        "nom"
    ];
    public function portfolios() {
        return $this->hasMany(portfolios::class);
    }
}
