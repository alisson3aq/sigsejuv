<?php

use Illuminate\Database\Seeder;
use App\User;

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
            'name'      => 'ADMIN',
            'cpf'       => '000.000.000-00',
            'email'     => 'admin@admin.com',
            'password'  => bcrypt('123456'),
        ]);
     
    }
}
