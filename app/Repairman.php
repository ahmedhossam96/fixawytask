<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Repairman extends Model
{
    
    protected $fillable = ['id','name','phone'];

    public function user()
    {
        return $this->morphOne(User::class, 'owner');
    }

    

    public function areas()
    {
        return $this->belongsToMany('App\Area');
    }


    public function services()
    {
        return $this->belongsToMany('App\Service');
    }

    

}
