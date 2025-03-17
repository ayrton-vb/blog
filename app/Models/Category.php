<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    //asignacion masiva
    protected $fillable = ['name','slug'];

    //para la url
    public function getRouteKeyName(){
        return 'slug';
    }

       //relacion uno a muchos

       public function posts(){
        return $this->hasMany(Post::class);
    }
}
