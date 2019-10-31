<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'titre','contenu',
    ];

    function user(){
        return $this->belongsTo('App\User', 'author_id', 'id');
    }
}
