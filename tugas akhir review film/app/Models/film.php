<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class film extends Model
{
    protected $table = "film";
    protected $fillable = ["judul", "ringkasan", "tahun", "genre_id"];

    public function genre()
    {
        return $this->belongsTo(genre::class,'genre_id');
    }

    public function kritik(){
        return $this->hasMany(kritik::class,'film_id');
    }

    public function owner(){
        return $this->belongsTo(User::class,'user_id');
    }
}
