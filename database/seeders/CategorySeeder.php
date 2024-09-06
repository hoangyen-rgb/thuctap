<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Carbon;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

     public function run(): void
     {
         $categories = [
              'skincare',
              'makeup',
              'hair care',
              'bath & body',
              'beauty supplements'
         ];
         foreach($categories as $name){
            $categoriesData[] =[
            'name'=>$name,
                'description' =>'',
                'created_at' =>Carbon::now(),
                'updated_at' =>Carbon::now(),
            ];
         }

         // Sử dụng insert để thêm nhiều bản ghi
         Category::insert($categoriesData);
}
}