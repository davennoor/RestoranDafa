<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    protected $fillable = ['user_id','menu_id','qunatity'];

    public function user(){
        return $this->belongsTo(User::class);
    }//m to 1

    public function menu(){
        return $this->belongsTo(Menu::class);
    }
}
