<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product; // Chú ý viết hoa chữ P
use Illuminate\Support\Carbon;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Khởi tạo mảng sản phẩm
        $products = [
            [
                'name' => 'Product 1',
                'description' => 'Description for product 1',
                'price' => 1000,
                'discount' => 30,
                'sold' => 42,
                'category_id' => rand(6, 10),
                'brand_id' => rand(1, 3), // Thêm brand_id
            ],
            [
                'name' => 'Product 2',
                'description' => 'Description for product 2',
                'price' => 1000,
                'discount' => 30,
                'sold' => 55,
                'category_id' => rand(6, 10),
                'brand_id' => rand(1, 3), // Thêm brand_id
            ],
            [
                'name' => 'Product 3',
                'description' => 'Description for product 3',
                'price' => 1000,
                'discount' => 30,
                'sold' => 1,
                'category_id' => rand(6, 10),
                'brand_id' => rand(1, 3), // Sửa lại khóa
            ],
            [
                'name' => 'Product 4',
                'description' => 'Description for product 4',
                'price' => 1000,
                'discount' => 30,
                'sold' => 25,
                'category_id' => rand(6, 10),
                'brand_id' => rand(1, 3), // Sửa lại khóa
            ],
            [
                'name' => 'Product 5',
                'description' => 'Description for product 5',
                'price' => 1000,
                'discount' => 30,
                'sold' => 1,
                'category_id' => rand(6, 10),
                'brand_id' => rand(1, 3), // Sửa lại khóa
            ],
            [
                'name' => 'Product 6',
                'description' => 'Description for product 6',
                'price' => 1000,
                'discount' => 30,
                'sold' => 1,
                'category_id' => rand(6, 10),
                'brand_id' => rand(1, 3), // Sửa lại khóa
            ],
            [
                'name' => 'Product 7',
                'description' => 'Description for product 7',
                'price' => 1000,
                'discount' => 30,
                'sold' => 1,
                'category_id' => rand(6, 10),
                'brand_id' => rand(1, 3), // Sửa lại khóa
            ]
        ];

        foreach ($products as $item) {
            $productsData[] = [
                'name' => $item['name'],
                'description' => $item['description'],
                'price' => $item['price'],
                'discount' => $item['discount'],
                'sold' => $item['sold'],
                'category_id' => $item['category_id'],
                'brand_id' => $item['brand_id'], // Đảm bảo truy cập đúng khóa
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }

        // Sử dụng insert để thêm nhiều bản ghi
        Product::insert($productsData);
    }
}
