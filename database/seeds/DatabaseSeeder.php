<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

         $this->call(ArticleTableSeeder::class);

        // Model::reguard();
    }
}


/**
* 
*/
class ArticleTableSeeder extends Seeder
{
    
    public  function run()
    {
        App\Article::truncate();
        factory(App\Article::class,20)->create();
    }
}