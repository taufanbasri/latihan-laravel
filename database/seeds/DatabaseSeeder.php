<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(PreferenceSeeder::class);
        $this->call(StudioSeeder::class);
        $this->call(MovieSeeder::class);
        $this->call(CourseSeeder::class);
        $this->call(StudentSeeder::class);
        $this->call(ArtistSeeder::class);
        $this->call(AlbumSeeder::class);
        $this->call(SongSeeder::class);
        $this->call(StatusSeeder::class);
        $this->call(PhotoSeeder::class);
        $this->call(CommentSeeder::class);
        $this->call(PersonSeeder::class);
        $this->call(ArticlesSeeder::class);
        $this->call(VideosSeeder::class);
        $this->call(TagsSeeder::class);
        $this->call(QuoteSeeder::class);
    $this->call(OrdersSeeder::class);
    }
}
