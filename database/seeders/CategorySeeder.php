<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Framework',
            'slug' => 'framework',
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);
        Category::create([
            'name' => 'Game',
            'slug' => 'game',
        ]);
        Category::create([
            'name' => 'UI/UX',
            'slug' => 'ui-ux',
        ]);
        Category::create([
            'name' => 'Database',
            'slug' => 'database',
        ]);
        Category::create([
            'name' => 'Machine Learning',
            'slug' => 'machine-learning',
        ]);
        Category::create([
            'name' => 'Artificial Intelligence',
            'slug' => 'artificial-intelligence',
        ]);

    }
}