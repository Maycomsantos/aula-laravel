<?php

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
        DB::table('users')->insert([
            'name'              =>   'Michael Santos',
            'email'             =>   'michaelsantos.the@hotmail.com',
            'password'          =>    Hash::make('12345678'),
            'remember_token'    =>    now(),
            'created_at'        =>    now()
            
        ]);

    }
}
