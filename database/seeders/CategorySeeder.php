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
            'color' => 'blue',
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
            'color' => 'emerald'
        ]);
        Category::create([
            'name' => 'Game',
            'slug' => 'game',
            'color' => 'red'
        ]);
        Category::create([
            'name' => 'UI/UX',
            'slug' => 'ui-ux',
            'color' => 'violet'
        ]);
        Category::create([
            'name' => 'Database',
            'slug' => 'database',
            'color' => 'neutral'
        ]);
        Category::create([
            'name' => 'Machine Learning',
            'slug' => 'machine-learning',
            'color' => 'indigo'
        ]);
        Category::create([
            'name' => 'Artificial Intelligence',
            'slug' => 'artificial-intelligence',
            'color' => 'amber'
        ]);

    }
}