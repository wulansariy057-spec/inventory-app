<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Item;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Akun Pengguna untuk Login
        User::create([
            'name' => 'Admin Toko',
            'email' => 'admin@toko.com',
            'password' => Hash::make('password123'),
        ]);

        // 2. Tiga Kategori
        $cat1 = Category::create(['name' => 'Aksesori']);
        $cat2 = Category::create(['name' => 'Perangkat Komputer']);
        $cat3 = Category::create(['name' => 'Penyimpanan']);

        // 3. Lima Barang Terhubung dengan Kategori
        Item::create([
            'category_id' => $cat1->id, 
            'name' => 'Keyboard', 
            'price' => 150000, 
            'stock' => 10
        ]);
        Item::create([
            'category_id' => $cat1->id, 
            'name' => 'Mouse', 
            'price' => 75000, 
            'stock' => 20
        ]);
        Item::create([
            'category_id' => $cat2->id, 
            'name' => 'Monitor', 
            'price' => 1500000, 
            'stock' => 5
        ]);
        Item::create([
            'category_id' => $cat1->id, 
            'name' => 'Headset', 
            'price' => 250000, 
            'stock' => 8
        ]);
        Item::create([
            'category_id' => $cat3->id, 
            'name' => 'Flashdisk', 
            'price' => 85000, 
            'stock' => 15
        ]);
    }
}