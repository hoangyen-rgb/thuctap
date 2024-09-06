<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Brand;
class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
     {
        $brands = [
            'UV',
            'MS',
            'P&T'
       ];
       foreach($brands as $name){
          $brandsData[] =[
          'name'=>$name,
          ];
       }

       // Sử dụng insert để thêm nhiều bản ghi
       Brand::insert($brandsData);
}
}
