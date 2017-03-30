<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = ['titulo','contenido', 'activo'];


     public function usuario()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

}
