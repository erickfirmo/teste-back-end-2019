<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = new App\User;
        $user->name = 'Suporte';
        $user->email = 'suporte@dindigital.com';
        $user->password = 'secret';
        $user->save();

        $user = new App\User;
        $user->name = 'Érick Firmo';
        $user->email = 'erickluques@gmail.com';
        $user->password = 'secret';
        $user->save();
    }
}
