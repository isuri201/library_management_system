<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::Create([
            'first_name'=>'Isuri',
            'last_name'=>'Piyumali',
            'email'=> 'www@gmail.com',
            'password'=>hash::make('12345678'),
            'role_id'=> 2
        ]);
    }
}
