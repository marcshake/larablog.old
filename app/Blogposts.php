<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blogposts extends Model
{
    public function author() {
        $user =  $this->belongsTo('App\User');
    }
}
