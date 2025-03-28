<?php

namespace App\Models\System;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class NavBar extends Model
{
    use HasFactory;

    protected $table = 'navbars';
    protected $guarded = [''];

    const TYPE_URL      = 1;
    const TYPE_MENU     = 2;
    const TYPE_ARTICLE  = 3;
    const TYPE_CATEGORY = 4;
    const TYPE_PRODUCT  = 5;

    public $type = [
        self::TYPE_URL      => [
            'name' => 'URL'
        ],
        self::TYPE_MENU     => [
            'name' => 'Menu Bài viết'
        ],
        self::TYPE_ARTICLE  => [
            'name' => 'Bài viết'
        ]
    ];

    public function getType()
    {
        return Arr::get($this->type, $this->nb_type, []);
    }
}
