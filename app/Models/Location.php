<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $guarded = [''];

    public function parent()
    {
        return $this->belongsTo(Location::class,'loc_parent_id','id');
    }
}
