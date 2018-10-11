<?php

use Illuminate\Database\Seeder;
use App\Shop\Categories\Category;

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
        $this->call(CategoryTableSeeder::class);
    }
}

class CategoryTableSeeder extends Seeder {

    public function run()
    {
        DB::table('categories')->delete();

        Category::create([
            'parent_id' => 0,
            'name' => 'Category 1',
            'slug' => 'category-1',
            'description' => 'Category 1 Description',
            'updated_at'=> "2018-10-11 11:19:18",
            'created_at'=> "2016-10-11 11:19:18",
        ]);

        Category::create([
            'parent_id'     => 0,
            'name'          => 'Category 2',
            'slug'          => 'category-2',
            'description'   => 'Category 2 Description',
            'updated_at'=> "2018-10-11 11:19:18",
            'created_at'=> "2016-10-11 11:19:18",
        ]);

        Category::create([
            'parent_id'     => 1,
            'name'          => 'Category 1 Child 1',
            'slug'          => 'category-1-child-1',
            'description'   => 'Category 1 Child 1 Description',
            'updated_at'=> "2018-10-11 11:19:18",
            'created_at'=> "2016-10-11 11:19:18",
        ]);

        Category::create([
            'parent_id'     => 1,
            'name'          => 'Category 1 Child 2',
            'slug'          => 'category-1-child-2',
            'description'   => 'Category 1 Child 2 Description',
            'updated_at'=> "2018-10-11 11:19:18",
            'created_at'=> "2016-10-11 11:19:18",
        ]);
    }

}
