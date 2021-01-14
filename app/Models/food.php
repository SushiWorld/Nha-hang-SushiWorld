<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class food extends Model
{
    protected $table = "food";

    public function category(){
    	return $this->belongsTo('App\Models\category','cate_id','id');
    }
}