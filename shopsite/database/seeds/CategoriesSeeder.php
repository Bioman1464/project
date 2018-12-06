<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public $array = [
        ['id' => 1, 'title' => 'ИКСС'],
        ['id' => 2, 'title' => 'РТС'],
        ['id' => 3, 'title' => 'ГФ'],
        ['id' => 4, 'title' => 'ИВО'],
        ['id' => 5, 'title' => 'ИСИТ'],
        ['id' => 6, 'title' => 'ФЭУ'],
        ['id' => 7, 'title' => 'ФФП'],
        ['id' => 8, 'title' => 'ИНО'],
        ['id' => 9, 'title' => 'Колледж'],
    ];
    public function run()
    {
        //factory(App\Models\Category::class, 5)->create();
        foreach($this->array as $arr) {

            DB::table('categories')->insert([
                'id'=>$arr['id'],
                'title'=>$arr['title'],
            ]);
        }

    }
}
