<?php

namespace App\Models\System;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfigLink extends Model
{
    use HasFactory;

    protected $guarded = [''];
    protected $table = 'config_links';
}
