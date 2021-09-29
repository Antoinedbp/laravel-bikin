<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    public function app() {
        return $this->belongsTo(App::class);
    }
    public function card() {
        return $this->belongsTo(App::class);
    }
    public function web() {
        return $this->belongsTo(App::class);
    }
}
