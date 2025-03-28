<?php

namespace Modules\Guest\Entities;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $guarded = [''];
    protected $table = 'vehicles';
    const TYPE_CAR_BAO = 5;
}
