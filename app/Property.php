<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    public function owner()
    {
    	return $this->hasOne('App\User', 'id', 'user_id');
    }
}
