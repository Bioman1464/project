<?php

use Illuminate\Database\Seeder;
use App\Models\Item;
class ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    /*public $array = [
        ['image' => 'macbook1.png', 'name' => 'sweet', 'price' => 15.2, 'color' => 'white', 'description' => 'cool'],
        ['image' => 'macbook1.png', 'name' => 'sweet123', 'price' => 15.22, 'color' => 'balck', 'description' => 'not cool'],
        ['image' => 'macbook1.png', 'name' => 'sweet123123', 'price' => 10.6, 'color' => 'red', 'description' => 'really cool']
    ];*/
    public function run()
    {
//        factory(App\Models\Item::class, 30)->create()->each(function ($item) {
//            $category_ids = [];
//            for ($i = 1; $i <= random_int(1, 1); $i++) {
//                $category_id = App\Models\Category::all()->random()->id;
//                if (!in_array($category_id, $category_ids)) {
//                    $category_ids[] = App\Models\Category::all()->random()->id;
//                }
//            }
//            $item->categories()->attach(App\Models\Category::find($category_ids));
//        });
        /*foreach($this->array as $arr) {

            DB::table('items')->insert([
                'image'=>$arr['image'],
                'name'=>$arr['name'],
                'price'=>$arr['price'],
                'color'=>$arr['color'],
                'description'=>$arr['description'],
            ]);

        }*/
        $item1 = \App\Models\Item::create([
            'image' => 'macbook1'.'.png',
            'name' => 'sweet',
            'price' => 15.2,
            'color' => 'white',
            'description' => 'cool'

        ]);
        $item2 = \App\Models\Item::create([
            'image' => 'macbook1'.'.png',
            'name' => 'sweet123',
            'price' => 15.22,
            'color' => 'black',
            'description' => 'not cool'
        ]);
        $item3 = \App\Models\Item::create([
            'image' => 'macbook1'.'.png',
            'name' => 'sweet123123',
            'price' => 10.6,
            'color' => 'red',
            'description' => 'really cool'
        ]);
        $items = [$item1, $item2, $item3];
        function($items)
        {
            $categories = [];
            for ($i = 1; $i <= random_int(1, 1); $i++) {
                $categories = App\Models\Category::all()->random()->id;
                if (!in_array($categories, $categories)) {
                    $categories[] = App\Models\Category::all()->random()->id;
                }
            }
            $items->categories()->attach(App\Models\Category::find($categories));
        };
    }
}
