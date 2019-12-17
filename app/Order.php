<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['service_id','repairman_id','customer_id'];


   public function users()
    {
        return $this->belongsToMany('App\User');
    }

    public function orders()
    {
        return $this->belongsToMany('App\Order');
    }

   



}
