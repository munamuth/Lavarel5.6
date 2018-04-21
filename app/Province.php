<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    public function sup()
    {
    	return $this->hasOne('App\Province', 'id', 'parent');
    }
}
