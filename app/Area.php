<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $fillable = ['id','name'];


    public function repairmen()
    {
        return $this->belongsToMany('App\Repairman');
    }

    public function services()
    {
        return $this->belongsToMany('App\Service');
    }


}
