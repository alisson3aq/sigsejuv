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
            'email'     => 'admin@admin.com',
            'cpf'       => '000.000.000-00',
            'password'  => bcrypt('123456'),
        ]);
     
    }
}
