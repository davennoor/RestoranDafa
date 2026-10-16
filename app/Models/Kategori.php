<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $fillable = ['name'];

    public function menu(){
        return $this->hasMany(Menu::class);
    }// 1 to m
}
