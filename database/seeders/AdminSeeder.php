<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //data dumy user seeder admin dan kasir
        $users = [
            [
                'name' => 'admin',
                'email' => 'admin@seeder.com',
                'email_verified_at' =>now(),
                'level' => 'admin',
                'password' => bcrypt('passwordadmin')
            ],
            [
                'name' => 'kasir',
                'email' => 'kasir@seeder.com',
                'email_verified_at' =>now(),
                'level' => 'kasir',
                'password' => bcrypt('passwordkasir')
            ],
        ];
        //seeder kategori
        $categories = [
            //seeder kategori 1
            [
                'name_category' => 'Jacket',
            ],
            //seeder kategori 2
            [
                'name_category' => 'Baju Atasan Wanita',
            ],
            //seeder kategori 3 dan seterusnya
            [
                'name_category' => 'Baju Atasan Pria',
            ],
            [
                'name_category' => 'Hijab',
            ],
            [
                'name_category' => 'Pakaian anak laki-laki',
            ],
            [
                'name_category' => 'Pakaian anak perempuan',
            ],
            [
                'name_category' => 'Aksesoris fashion',
            ],
            [
                'name_category' => 'Pakaian anak perempuan',
            ],
        ];
        // seeder untuk product
        $products = [
            //seeder product 1
            [
                'name_product' => 'Kaos Pria Journey',
                'description' => 'masih baru',
                'stock' => 889,
                'price' => 35000,
                'category_id' => 3
            ],
            //seeder product 2 dan seterusnya
            [
                'name_product' => 'Kaos Krah Pria Dewasa',
                'description' => 'masih baru',
                'stock' => 889,
                'price' => 35000,
                'category_id' => 3
            ],
            [
                'name_product' => 'Dress anak perempuan boba',
                'description' => 'masih baru',
                'stock' => 889,
                'price' => 35000,
                'category_id' => 6
            ],
            [
                'name_product' => 'Dress perempuan GEA',
                'description' => 'masih baru',
                'stock' => 889,
                'price' => 35000,
                'category_id' => 6
            ],
            [
                'name_product' => 'Nagita Long square',
                'description' => 'masih baru',
                'stock' => 889,
                'price' => 35000,
                'category_id' => 2
            ],
            [
                'name_product' => 'Turtleneck Kriwil',
                'description' => 'masih baru',
                'stock' => 889,
                'price' => 35000,
                'category_id' => 2
            ],
        ];
        foreach ($products as $product){
            Product::create($product);
        }
        foreach ($categories as $category){
            Category::create($category);
        }
        foreach ($users as $user){
            User::create($user);
        }
    }
}
