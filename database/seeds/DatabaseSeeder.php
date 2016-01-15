<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);
        DB::table('users')->delete();

        \App\User::create([
            'name'=>'Rodolfo Estima',
            'email'=>'rudwolf@gmail.com',
            'password'=>'123456',
        ]);

        Model::reguard();
    }
}
