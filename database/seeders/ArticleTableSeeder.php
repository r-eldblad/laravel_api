<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::create([
                'author_id' => 1,
                'title' => 'Artikel 1'
            ]);

            Article::create([
                'author_id' => 1,
                'title' => 'Artikel 2'
            ]);
    }
}
