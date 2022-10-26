<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

//        Category::create([
//                'name' => 'Technology',
//                'slug' => 'technology',
//        ]);
        Category::insert([
            [
                'name' => 'Politics',
                'slug' => 'politics',
            ],
            [
                'name' => 'Science',
                'slug' => 'science',
            ],
            [
                'name' => 'Sports',
                'slug' => 'sports',
            ],
            [
                'name' => 'Entertainment',
                'slug' => 'entertainment',
            ],
            [
                'name' => 'Economics',
                'slug' => 'economics',
            ],
        ]);
    }
}
