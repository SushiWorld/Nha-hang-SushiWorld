<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
    protected $table = "reservation";
    public function kinds(){
    	return $this->belongsTo('App\Models\kinds','kind','id');
    }
}
