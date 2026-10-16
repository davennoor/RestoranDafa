<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $fillable = ['user_id','invoice','totalharga','metode_pembayaran','bukti_pembayaran','status'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function detailtransaksi(){
        return $this->hasMany(DetailTransaksi::class);
    }
}
