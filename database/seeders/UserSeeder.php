<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Suport\Facades\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'nama_lengkap' => 'Jovanka Alexandro',
            'no_hp' => '081212840590',
            'alamat_lengkap' => 'Perum Griya Permai Block C2 NO 5',
            'level' => 1,
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123')
        ]);
    }
}
