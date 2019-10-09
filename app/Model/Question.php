<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function user(){
    	return $this->belongsTo(User::class);
    }
    public function reply(){
    	return $this->hasMany(Reply::class);
    }
    public function category(){
    	retrun $this->belongsTo(Category::class);
    }
}
