<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run(): void
    {

        // Top-level category
        $programmingId = DB::table('categories')->insertGetId([
            'name' => 'Programming',
            'slug' => Str::slug('Programming'),
            'parent_id' => null,
            'sort' => 1,
            'active' => true,
            'description' => 'All things related to programming.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Laravel under Programming
        $laravelId = DB::table('categories')->insertGetId([
            'name' => 'Laravel',
            'slug' => Str::slug('Laravel'),
            'parent_id' => $programmingId,
            'sort' => 1,
            'active' => true,
            'description' => 'Laravel framework resources and tutorials.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Sub-categories under Laravel
        DB::table('categories')->insert([
            [
                'name' => 'Filament',
                'slug' => Str::slug('Filament'),
                'parent_id' => $laravelId,
                'sort' => 1,
                'active' => true,
                'description' => 'Filament admin panel, forms, tables, and customizations.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Livewire',
                'slug' => Str::slug('Livewire'),
                'parent_id' => $laravelId,
                'sort' => 2,
                'active' => true,
                'description' => 'Laravel Livewire components and interactivity.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Eloquent',
                'slug' => Str::slug('Eloquent'),
                'parent_id' => $laravelId,
                'sort' => 3,
                'active' => true,
                'description' => 'Laravel ORM and database relationships.',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);

        // Other top-level categories under Programming
        DB::table('categories')->insert([
            [
                'name' => 'PHP',
                'slug' => Str::slug('PHP'),
                'parent_id' => $programmingId,
                'sort' => 2,
                'active' => true,
                'description' => 'PHP programming language.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'JavaScript',
                'slug' => Str::slug('JavaScript'),
                'parent_id' => $programmingId,
                'sort' => 3,
                'active' => true,
                'description' => 'JavaScript and frontend frameworks.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Sub-categories under JavaScript
        $javascriptId = DB::table('categories')->where('slug', 'javascript')->value('id');

        DB::table('categories')->insert([
            [
                'name' => 'Vue.js',
                'slug' => Str::slug('Vue.js'),
                'parent_id' => $javascriptId,
                'sort' => 1,
                'active' => true,
                'description' => 'Vue.js frontend framework.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Alpine.js',
                'slug' => Str::slug('Alpine.js'),
                'parent_id' => $javascriptId,
                'sort' => 2,
                'active' => true,
                'description' => 'Alpine.js lightweight frontend framework.',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
