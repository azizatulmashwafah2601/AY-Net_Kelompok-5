<?php

use App\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bycrypt($request->password),
            'foto_profil' => 'request',
            'remember_token' => Str::random(60),
        ]);
    }
}
