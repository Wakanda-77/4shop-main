<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function sizes()
    {
    	return $this->hasMany(Size::class);
    }
}
