<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = ['kategori_id','name','harga','deskripsi','foto'];

    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }//m to 1

    public function detailtransaksi(){
        return $this->hasMany(DetailTransaksi::class);
    }//m to 1

    public function keranjang(){
        return $this->hasMany(Keranjang::class);
    }
}
