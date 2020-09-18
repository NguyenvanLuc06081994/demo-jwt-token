<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User();
        $user->name = 'Vu Viet Anh';
        $user->email = 'vietanh@gmail.com';
        $user->password = '123456';
        $user->save();
    }
}
