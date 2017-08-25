<?php

use Illuminate\Database\Seeder;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tag1 = \App\Tag::create(['name' => 'Design']);
        $tag2 = \App\Tag::create(['name' => 'Startup']);
        $tag3 = \App\Tag::create(['name' => 'Backend']);
        $tag4 = \App\Tag::create(['name' => 'Testing']);
        $tag5 = \App\Tag::create(['name' => 'HTML']);

        // Taggable
        DB::table('taggables')->insert([
            ['tag_id' => 3, 'taggable_id' => 1, 'taggable_type' => 'App\Article'],
            ['tag_id' => 1, 'taggable_id' => 2, 'taggable_type' => 'App\Article'],
            ['tag_id' => 5, 'taggable_id' => 2, 'taggable_type' => 'App\Article'],
            ['tag_id' => 2, 'taggable_id' => 3, 'taggable_type' => 'App\Article'],
            ['tag_id' => 3, 'taggable_id' => 1, 'taggable_type' => 'App\Video'],
            ['tag_id' => 4, 'taggable_id' => 1, 'taggable_type' => 'App\Video'],
            ['tag_id' => 2, 'taggable_id' => 2, 'taggable_type' => 'App\Video']
        ]);
    }
}
