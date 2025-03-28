<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $guarded = [''];

    public function menu()
    {
        return $this->belongsTo(Menu::class,'a_menu_id');
    }
}
