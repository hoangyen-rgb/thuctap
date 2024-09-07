<?php

namespace Database\Seeders;
use App\Models\Ambassador;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
class AmbassadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ambassadorsData = array_map(function($i) {
            return [
                'name' => 'ambassador' . $i,
                'username' => 'ambassador' . $i,
                'facebook_url' => 'facebook_url' . $i,
                'twitter_url' => 'twitter_url' . $i,
                'youtube_url' => 'youtube_url' . $i,
                'image' => 'sp' . $i . '.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }, range(1, 10)); // tạo 10 mục

        Ambassador::insert($ambassadorsData);
    }
}