<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $roles =[
        ['name'=>'member'],
        ['name'=>'admin'],
        ['name'=>'librarian']

       ];
       foreach($roles as $role){
        Role::create($role);
       }

    }
}
