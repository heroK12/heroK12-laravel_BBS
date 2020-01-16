<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;

class Comment extends Model
{
    //model
    protected $fillable = [
        'body',
    ];

    public function post(){
        return $this->belongsTo('App\Post');
    }
}
