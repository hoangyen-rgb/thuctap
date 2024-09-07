<?php

namespace Database\Seeders;

use App\Models\gallery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $galleriesData = array_map(function(){
            return [
                'product_id' => rand(22,28),
                'thumbnail' => 'sp'.rand(1,8).'.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
    }, range(1,15)); // tạo 15 mục
    gallery::insert($galleriesData);
}}