<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
  
    protected $fillable = ['id','name','phone'];




    public function user()
    {
        return $this->morphOne(User::class, 'owner');
    }
}
