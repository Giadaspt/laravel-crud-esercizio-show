<?php

use App\Pasta;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PastaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pastas = config('products');

        foreach ($pastas as $pasta){
            $new_pasta = new Pasta();
            $new_pasta->image = $pasta['src'];
            $new_pasta->title = $pasta['titolo'];
            $new_pasta->type = $pasta['tipo'];
            $new_pasta->cooking_time = $pasta['cottura'];
            $new_pasta->description = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima rem mollitia odio similique. Deserunt ex nesciunt odit possimus itaque iure nihil aut doloribus cumque dolore architecto necessitatibus sed, deleniti, molestias officia laborum omnis eligendi. Aspernatur aperiam, in mollitia, totam recusandae, consequatur ex dignissimos pariatur nemo rem nisi nihil officiis vero!';
            $new_pasta->slug = Str::slug($new_pasta->title, '-');

            $new_pasta->save();

        }
    }
}
