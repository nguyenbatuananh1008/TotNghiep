<?php

namespace Modules\Guest\Entities;

use App\Models\Location;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Buses extends Model
{
    protected $guarded = [''];

    const TYPE_CAR_BAO = 5;
    public function guest()
    {
        return $this->belongsTo(User::class, 'b_guest_id');
    }

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class,'b_vehicle_id');
    }

    public function starting()
    {
        return $this->belongsTo(Location::class,'b_starting_point_id');
    }

    public function destination()
    {
        return $this->belongsTo(Location::class,'b_destination_id');
    }
}
