<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
   // protected $fillable = ['id','title','desc','url','showstar'];


   public function users()
    {
        return $this->belongsToMany('App\User');
    }

    public function orders()
    {
        return $this->belongsToMany('App\Order');
    }

   



}
