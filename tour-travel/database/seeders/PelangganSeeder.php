<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pelanggan = [
            [
                'nama' => "Lula Rania",
                'email' => "salsabillalula@gmail.com",
                'password' => "user123",
                'telepon' => "08974538282",
                'alamat' => "Pasuruan",
                'created_at' => Carbon::now(),
            ],
            [
                'nama' => "Jihan",
                'email' => "jihan@gmail.com",
                'password' => "user123",
                'telepon' => "08991093092",
                'alamat' => "Surabaya",
                'created_at' => Carbon::now(),
            ],
            [
                'nama' => "Dzaky",
                'email' => "jakih@gmail.com",
                'password' => "user123",
                'telepon' => "0899109101",
                'alamat' => "Sidoarjo",
                'created_at' => Carbon::now(),
            ],
        ];

        foreach ($pelanggan as $pelanggan) {
            DB::table('pelanggan')->insert($pelanggan);
        }
    }
}