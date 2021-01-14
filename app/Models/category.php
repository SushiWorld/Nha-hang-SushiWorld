<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table = "category";

    public function food(){
    	return $this->hasMany('App\Models\food','cate_id','id');
    }


}
