<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $uuid = Str::uuid()->toString();

        DB::table('admins') -> insert( [
            'name' => 'Aung Aung',
            'email' => 'aung@gmail.com',
            'address' => 'Yangon',
            'role_id' => 1,
            'phone' => '0066',
            'password' => bcrypt('12345'),
            'image' => '-',
            'uuid' => $uuid,
            'status' => 'active',
        ]);
    }
}
