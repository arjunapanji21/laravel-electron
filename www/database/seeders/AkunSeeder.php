<?php

namespace Database\Seeders;

use App\Models\Akun;
use Illuminate\Database\Seeder;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Akun::create([
            'kode' => '10000',
            'nama' => 'HARTA',
        ]);
        Akun::create([
            'kode' => '20000',
            'nama' => 'HUTANG',
        ]);
        Akun::create([
            'kode' => '30000',
            'nama' => 'MODAL',
        ]);
        Akun::create([
            'kode' => '40000',
            'nama' => 'PENDAPATAN',
        ]);
        Akun::create([
            'kode' => '50000',
            'nama' => 'HPP',
        ]);
        Akun::create([
            'kode' => '60000',
            'nama' => 'BIAYA',
        ]);
        Akun::create([
            'kode' => '80000',
            'nama' => 'PENDAPATAN LAIN-LAIN',
        ]);
        Akun::create([
            'kode' => '90000',
            'nama' => 'BIAYA LAIN-LAIN',
        ]);
    }
}
