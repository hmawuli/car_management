<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'hormeku mawuli',
            'email'  => 'hormekumawuli93@gmail.com',
            'password' => bcrypt('0245831131'),
        ]);

        User::create([
            'name' => 'felix ganyou',
            'email'  => 'felixganyo12345@gmail.com',
            'password' => bcrypt('0245831131'),
        ]);
    }
}
