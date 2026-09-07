<?php

/*
  Plainpad - Self Hosted Note Taking App

  Copyright (C) Alex Tselegidis - https://alextselegidis.com

  This program is free software: you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation, either version 3 of the License, or
  (at your option) any later version.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program.  If not, see <https://www.gnu.org/licenses/>
*/

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => '00000000-0000-4000-8000-000000000001',
            'created_at' => '2024-01-01 09:00:00',
            'updated_at' => '2024-01-01 09:00:00',
            'name' => 'Admin',
            'email' => 'admin@example.org',
            'password' => Hash::make('12345678'),
            'locale' => 'en-US',
            'encrypt' => false,
            'admin' => true,
        ]);

        echo 'Login with the default admin user (email: admin@example.org & password: 12345678).' . PHP_EOL;
    }
}
