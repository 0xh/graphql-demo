<?php

use Illuminate\Database\Seeder;

class NovaAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class)->create([
            'email' => 'admin@example.com',
            'password' => bcrypt('secret')
        ]);
    }
}
