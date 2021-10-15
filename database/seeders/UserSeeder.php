<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'utype' => 'ADM',
                'password' => bcrypt('11111111')
            ],
            [
                'name' => 'User',
                'email' => 'user@gmail.com',
                'utype' => 'USR',
                'password' => bcrypt('11111111')
            ],
            [
                'name' => 'tokped',
                'email' => 'tokped@company.com',
                'utype' => 'CPY',
                'password' => bcrypt('11111111')
            ]
        ];
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
