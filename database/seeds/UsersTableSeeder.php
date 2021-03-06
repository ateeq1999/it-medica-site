<?php

use App\User;
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
        $user=User::create([
            'first_name'=>'super',
            'last_name' =>'admin',
            'email'=>'super_admin@email.com',
            'password'=>bcrypt('123456')
        ]);

        $user->attachRole('super_admin');

        $admin=User::create([
            'first_name'=>'My',
            'last_name' =>'admin',
            'email'=>'admin@admin.com',
            'password'=>bcrypt('password')
        ]);

        $admin->attachRole('super_admin');
    }
}
