<?php

namespace Database\Seeders;

use App\Models\DetailTransaksi;
use App\Models\Kategori;
use App\Models\Keranjang;
use App\Models\Menu;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name'=>'Dafa',
            'email'=>'dafa@gmail.com',
            'password'=>bcrypt('123'),
            'role'=>'admin',
        ]);

        User::create([
            'name'=>'Helo',
            'email'=>'helo@gmail.com',
            'password'=>bcrypt('123'),
            'role'=>'customer',
        ]);

        Kategori::create([
            'name'=>'Makanan'
        ]);

        Kategori::create([
            'name'=>'Minuman'
        ]);

        Menu::create([
            'kategori_id'=>1,
            'name'=>'Bolu',
            'harga'=>400000,
            'deskripsi'=>'Bolu lumer enak coklat',
            'gambar'=>'bolu.jpg',

        ]);

        Menu::create([
            'kategori_id'=>2,
            'name'=>'Es Mojito',
            'harga'=>200000,
            'deskripsi'=>'Es Dengan rasa jeruk nipis',
            'gambar'=>'mojito.jpg',
        ]);

        Keranjang::create([
            'user_id'=>2,
            'menu_id'=>2,
            'quantity'=>3
        ]);

        Transaksi::create([
            'user_id'=>2,
            'invoice'=>'rtrygdfdy23',
            'totalharga'=>600000,
            'metode_pembayaran'=>'qris',
            'bukti_pembayaran'=>'pemabayaran.jpg',
            'status'=>'pending'
        ]);

        DetailTransaksi::create([
            'transaksi_id'=>1,
            'menu_id'=>2,
            'quantity'=>3,
            'harga'=>600000
        ]);
        
    }
}
