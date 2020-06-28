<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Table Name
    protected $table = 'posts';
    //Primary Key
     public $primaryKey = 'id';
    //Timestamps
    public $timestamps = true;

    public function category(){

        return $this->belongsTo('App\Category','categories_id');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
