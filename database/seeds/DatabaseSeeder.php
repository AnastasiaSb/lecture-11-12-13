<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(ProductsSeeder::class);
        $this->call(ImagesSeeder::class);
    }
}

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'parent_id' => 0,
                'name' => 'Category 1',
                'slug' => 'category-1',
                'description' => 'Category 1 Description',
            ],
            [
                'parent_id' => 0,
                'name' => 'Category 2',
                'slug' => 'category-2',
                'description' => 'Category 2 Description',
            ],
            [
                'parent_id' => 1,
                'name' => 'Category 1 Child 1',
                'slug' => 'category-1-child-1',
                'description' => 'Category 1 Child 1 Description',
            ],
            [
                'parent_id' => 1,
                'name' => 'Category 1 Child 2',
                'slug' => 'category-1-child-2',
                'description' => 'Category 1 Child 2 Description',
            ]
        ]);
    }
}

class ImagesSeeder extends Seeder
{
    public function run()
    {
        DB::table('images')->insert([
            [
                'product_id' => '1',
                'src' => 'product-1.jpg',
            ],
            [
                'product_id' => '2',
                'src' => 'product-2.jpg',
            ],
            [
                'product_id' => '3',
                'src' => 'product-3.jpg',
            ],
        ]);
    }
}

class ProductsSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert([
            [
                'category_id' => '1',
                'name' => 'Product 1',
                'slug' => 'product-1',
                'description' => 'Description 1',
                'price' => 1.5,
                'status' => 1,
                'quantity' => 1
            ],
            [
                'category_id'   => '2',
                'name'          => 'Product 2',
                'slug'          => 'product-2',
                'description'   => 'Description 2',
                'price'         => 2.5,
                'status'        => 1,
                'quantity'      => 1
            ],
            [
                'category_id'   => '1',
                'name'          => 'Product 3',
                'slug'          => 'product-3',
                'description'   => 'Description 3',
                'price'         => 3,
                'status'        => 1,
                'quantity'      => 1
            ],
        ]);
    }
}
