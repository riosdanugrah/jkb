<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Banner::create([
            'name' => $name = 'banner 1',
            'slug'=>str($name)->slug(),
            'image'=> 'https://images.unsplash.com/photo-1606791405792-1004f1718d0c?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxleHBsb3JlLWZlZWR8MTV8fHxlbnwwfHx8fHw%3D'
        ]);
        Banner::create([
            'name' => $name = 'banner 2',
            'slug'=>str($name)->slug(),
            'image' => 'https://images.unsplash.com/photo-1553292218-4892c2e7e1ae?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxleHBsb3JlLWZlZWR8MjN8fHxlbnwwfHx8fHw%3D'
        ]);
        Banner::create([
            'name' => $name = 'banner 3',
            'slug'=>str($name)->slug(),
            'image' => 'https://images.unsplash.com/photo-1493925410384-84f842e616fb?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxleHBsb3JlLWZlZWR8MzR8fHxlbnwwfHx8fHw%3D'
        ]);
    }
}
