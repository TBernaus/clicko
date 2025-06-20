<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $domains = ['gmail.com', 'yahoo.com', 'outlook.com', 'clicko.es', 'hotmail.com'];
        
        User::factory(20)->create()->each(function ($user) use ($domains) {
            $domain = $domains[array_rand($domains)];
            $user->email = str_replace('@example.com', '@'.$domain, $user->email);
            $user->email = str_replace('@example.org', '@'.$domain, $user->email);
            $user->email = str_replace('@example.net', '@'.$domain, $user->email);
            $user->save();
        });
    }
}