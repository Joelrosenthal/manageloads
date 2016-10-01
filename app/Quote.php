<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{

	protected $table = 'loads';
    protected $fillable = [
        'id',
        'its_customer',
        'pick_city',
        'pick_state',
        'delivery_city',
        'delivery_state',
        'trailer_type',
        'pick_date',
        'urgency',
        'commodity',
        'length',
        'width',
        'height',
        'weight',
        'load_type',
        'miles',
        'in_house_offering',
        'offering',
        'billing',
        'special_instructions',
		'contact_name',
        'contact_phone',
        'tmanum',
        'pick_pc_number',
        'del_pc_number',
        'ponumber',
        'del_date',
        'selected_carrier',
    ];
}
