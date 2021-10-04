<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    protected $table = "portfolios";

    protected $fillable = [
        "photo_id",
        "image"
    ];
    public function photo() {
        return $this->belongsTo(Photo::class, "photo_id");
    }
   
}
