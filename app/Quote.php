<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{

	protected $table = 'loadlistitransys';
    protected $fillable = [
        'pick_city', 'pick_state', 'delivery_city', 'delivery_state', 'commodity',
    ];
}
