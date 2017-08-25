<?php

use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comments1 = \App\Comment::create(['content' => 'Jadikan aku muridmu guru.. :o', 'user_id' => 3, 'commentable_id' => 1, 'commentable_type' => 'App\Status']);
        $comments2 = \App\Comment::create(['content' => 'Ini juga baru belajar mas..', 'user_id' => 1, 'commentable_id' => 1, 'commentable_type' => 'App\Status']);
        $comments3 = \App\Comment::create(['content' => 'Ahh.. merendah untuk meninggi nih..', 'user_id' => 3, 'commentable_id' => 1, 'commentable_type' => 'App\Status']);
        $comments4 = \App\Comment::create(['content' => '+1 like this banget dah..', 'user_id' => 3, 'commentable_id' => 2, 'commentable_type' => 'App\Status']);
        $comments5 = \App\Comment::create(['content' => 'Kalau cari jodoh? Hahaha.. :v', 'user_id' => 1, 'commentable_id' => 2, 'commentable_type' => 'App\Status']);
        $comments6 = \App\Comment::create(['content' => 'Catet ah..', 'user_id' => 2, 'commentable_id' => 1, 'commentable_type' => 'App\Photo']);
        $comments7 = \App\Comment::create(['content' => 'Belinya dimana nih?', 'user_id' => 3, 'commentable_id' => 1, 'commentable_type' => 'App\Photo']);
        $comments8 = \App\Comment::create(['content' => 'Di Gramedia ada koq.', 'user_id' => 1, 'commentable_id' => 1, 'commentable_type' => 'App\Photo']);
        $comments9 = \App\Comment::create(['content' => 'Akhirnya nikah juga. Selamat ya! :D', 'user_id' => 1, 'commentable_id' => 2, 'commentable_type' => 'App\Photo']);
        $comments10 = \App\Comment::create(['content' => 'Sekarang tinggal dimana?', 'user_id' => 3, 'commentable_id' => 2, 'commentable_type' => 'App\Photo']);
        $comments11 = \App\Comment::create(['content' => 'Di Bandung.. :)', 'user_id' => 2, 'commentable_id' => 2, 'commentable_type' => 'App\Photo']);

    }
}
