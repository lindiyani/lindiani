<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    //
    protected $fillable  = ['name'];
    protected $visible  = ['name'];
   
    public function books()
    	{
    return $this->hasMany('App\Book');
    }
}
