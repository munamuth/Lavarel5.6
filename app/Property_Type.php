<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property_Type extends Model
{
    public function status()
    {
    	return $this->hasOne('App\Status', 'id', 'status_id');
    }
}
