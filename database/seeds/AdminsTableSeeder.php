<?php

use Illuminate\Database\Seeder;
use App\Models\Admins;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $salt = str_random(10);
        Admins::create([
                'name' => 'Administrator',
                'email' => 'admin@example.com',
                'salt' => $salt,
                'password' => bcrypt($salt.'password'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                ]);
    }
}
