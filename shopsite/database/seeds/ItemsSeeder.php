<?php

use Illuminate\Database\Seeder;

class ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Item::class, 30)->create()->each(function ($article) {
            $category_ids = [];
            for ($i = 1; $i <= random_int(1, 3); $i++) {
                $category_id = App\Category::all()->random()->id;
                if (!in_array($category_id, $category_ids)) {
                    $category_ids[] = App\Category::all()->random()->id;
                }
            }
            $article->categories()->attach(App\Category::find($category_ids));
        });
    }
}
