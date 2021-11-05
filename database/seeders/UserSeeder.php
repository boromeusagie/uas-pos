<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();

        $users = [
            [
                'name' => 'Superadmin',
                'username' => 'admin',
                'email' => 'admin@test.com',
                'password' => Hash::make('admin1234'),
                'email_verified_at' => $now,
                'is_admin' => true
            ],
            [
                'name' => 'Cashier',
                'username' => 'cashier',
                'email' => 'cashier@test.com',
                'password' => Hash::make('cashier1234'),
                'email_verified_at' => $now,
                'is_admin' => false
            ]
        ];

        foreach ($users as $user) {
            $newUser = new User();
            $newUser->create($user);
        }
    }
}
