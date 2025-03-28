<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    use HasFactory;

    protected $guarded = [''];
    protected $table = 'configurations';
    protected $fillable = [
        'logo', 'point_register', 
        'point_ticket_done', 'email',
        'company','address',
        'map', 'hotline', 
        'footer_bottom',
        'created_at','updated_at'
    ];
}
