<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kritik extends Model
{
    use HasFactory;

    protected $table = "kritik";
    protected $fillable = ["user_id", "film_id", "content", "point"];

    public function owner(){
        return $this->belongsTo(User::class,'user_id');
    }
}
