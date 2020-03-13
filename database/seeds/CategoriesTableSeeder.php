<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            factory(App\Category::class, 4)->create()
            ->each(function ($category) {
                factory(App\Product::class, 8)->create();
            });
    }
}
