<?php

use Illuminate\Database\Seeder;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $article1 = \App\Article::create(['title' => 'Multi Gateway Payment dengan Omnipay', 'content' => 'Laborum aliuid culpa reru...']);
        $article2 = \App\Article::create(['title' => 'Brunch, Alternatif Gulp dan Grunt', 'content' => 'Omnis assumnda culpa sed ...']);
        $article3 = \App\Article::create(['title' => '5 Kesalahan Fatal dalam Memulai Startup', 'content' => 'Laboriosam ui sint nemo d...']);
    }
}
