<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        factory(User::class)->create([
            'email' => 'admin@admin.com',
            'name' => 'Administrator',
            'password' => bcrypt("password"),
        ]);
    }
}