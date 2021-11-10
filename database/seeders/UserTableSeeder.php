<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'name' => 'Đỗ Huy',
            'email' => 'dohuymidside@gmail.com',
            'phone' => '0367097315'
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Ngọc Thanh',
            'email' => 'thanh@gmail.com',
            'phone' => '0985366912'
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Lê Văn Hòa',
            'email' => 'hoa@gmail.com',
            'phone' => '0909090909'
        ]);
    }
}
