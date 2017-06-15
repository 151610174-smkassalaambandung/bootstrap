<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
  //
	protected $filable =['name'];
	    public function books()
    {
    	return $this->hasMany('App\Book');
    }
}
