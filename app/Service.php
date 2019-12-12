<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['id','name'];

    public function repairmen()
    {
        return $this->belongsToMany('App\Repairman');
    }
    public function orders()
    {
        return $this->belongsToMany('App\Order');
    }
    public function areas()
    {
        return $this->belongsToMany('App\Area');
    }
}
