<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kinds extends Model
{
    protected $table = "kinds";

    public function reservation(){
    	return $this->hasMany('App\Models\reservation','kind','id');
    }

}
