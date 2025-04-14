<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('categories')->insert([
            [
                "name" => "Laptop",
                "slug" => "laptop",
                "image" => "laptop.jpg"
            ],
            [
                "name" => "PC",
                "slug" => "pc",
                "image" => "pc.jpg"
            ],
            [
                "name" => "Màn hình",
                "slug" => "man-hinh",
                "image" => "man-hinh.jpg"
            ],
            [
                "name" => "Mainboard",
                "slug" => "mainboard",
                "image" => "mainboard.jpg"
            ],
            [
                "name" => "CPU",
                "slug" => "cpu",
                "image" => "cpu.jpg"
            ],
            [
                "name" => "VGA",
                "slug" => "vga",
                "image" => "vga.jpg"
            ],
            [
                "name" => "RAM",
                "slug" => "ram",
                "image" => "ram.jpg"
            ],
            [
                "name" => "Ổ cứng",
                "slug" => "o-cung",
                "image" => "o-cung.jpg"
            ],
            [
                "name" => "Case",
                "slug" => "case",
                "image" => "case.jpg"
            ],
            [
                "name" => "Tản nhiệt",
                "slug" => "tan-nhiet",
                "image" => "tan-nhiet.jpg"
            ],
            [
                "name" => "Nguồn",
                "slug" => "nguon",
                "image" => "nguon.jpg"
            ],
            [
                "name" => "Bàn phím",
                "slug" => "ban-phim",
                "image" => "ban-phim.jpg"
            ],
            [
                "name" => "Chuột",
                "slug" => "chuot",
                "image" => "chuot.jpg"
            ],
            [
                "name" => "Ghế",
                "slug" => "ghe",
                "image" => "ghe.jpg"
            ],
            [
                "name" => "Tai nghe",
                "slug" => "tai-nghe",
                "image" => "tai-nghe.jpg"
            ],
            [
                "name" => "Loa",
                "slug" => "loa",
                "image" => "loa.jpg"
            ],
            [
                "name" => "Console",
                "slug" => "console",
                "image" => "console.jpg"
            ],
            [
                "name" => "Phụ kiện",
                "slug" => "phu-kien",
                "image" => "phu-kien.jpg"
            ],
            [
                "name" => "Thiết bị văn phòng",
                "slug" => "thiet-bi-van-phong",
                "image" => "thiet-bi-van-phong.jpg"
            ],
            [
                "name" => "Apple",
                "slug" => "apple",
                "image" => "apple.jpg"
            ],
        ]);
    }
}
