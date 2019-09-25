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
        factory(App\User::class)->create([
            'name' => 'Ro',
            'email' => 'ro@signifly.com'
        ]);

        factory(App\User::class, 9)->create();
    }
}
