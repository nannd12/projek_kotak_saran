<?php

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
        //menjalankan seeder
        DB::table('users')->insert([
        	'name' => 'Kevin Hendrawan Hartono',
        	'nim' => '150602031',
        	'email' => 'amedia92@gmail.com',
        	'password' => bcrypt('12345678'),
        	]);
    }
}
