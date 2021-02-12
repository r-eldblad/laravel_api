<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;

class ArticleAuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Author::create([
            'first_name' => 'Bob',
            'sur_name' => 'Smith',
            'email' => 'bob.smith@protonmail.com'
        ]);
    }
}
