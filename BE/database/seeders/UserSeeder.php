<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            [
                "name" => "Lâm Quốc Bảo",
                "email" => "lamquocbao26042005@gmail.com",
                "password" => Hash::make("123456"),
                "phone" => "0785548882",
                "address" => "56 Nguyen Oanh, P1, Go Vap",
                "role" => "admin",
                "gender" => "male",
            ],
            [
                "name" => "Trần Chí Minh",
                "email" => "minhtcps38149@gmail.com",
                "password" => Hash::make("123456"),
                "phone" => "0785548882",
                "address" => "56 Nguyen Oanh, P1, Go Vap",
                "role" => "user",
                "gender" => "male",
            ],
            [
                "name" => "Trần Chí Khanh",
                "email" => "khanhtcps38206@gmail.com",
                "password" => Hash::make("123456"),
                "phone" => "0785548882",
                "address" => "56 Nguyen Oanh, P1, Go Vap",
                "role" => "user",
                "gender" => "male",
            ]
        ]);
    }
}
