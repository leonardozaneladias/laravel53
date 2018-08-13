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
        factory(\CodePub\Models\User::class, 1)->create([
            'email' => 'admin@laravel53.com.br'
        ]);

        factory(\CodePub\Models\User::class, 1)->create([
            'email' => 'admin1@laravel53.com.br'
        ]);
    }
}
