<?php

namespace Database\Seeders;

use App\Models\User;
use App\PostStatus;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        $categoryIds = DB::table('categories')->pluck('id')->toArray();

        if (empty($categoryIds)) {
            $this->command->warn(' No categories found. Please run CategorySeeder first.');
            return;
        }

        $totalPosts = 20;

        for ($i = 1; $i <= $totalPosts; $i++) {
            $postId = DB::table('posts')->insertGetId([
                'type' => "post",
                'title' => ucfirst($faker->sentence(4)),
                'slug' => Str::slug($faker->unique()->sentence(3) . '-' . Str::random(5)),
                'exercpt' => $faker->paragraph(2),
                'content' => $faker->paragraphs(5, true),
                'status' => PostStatus::PUBLISHED->value,
                'published_at' => now(),
                'author_id' => User::first()?->id,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            $randomCategories = $faker->randomElements($categoryIds, rand(1, 3));

            foreach ($randomCategories as $categoryId) {
                DB::table('category_posts')->insert([
                    'post_id' => $postId,
                    'category_id' => $categoryId,
                ]);
            }
        }

        $this->command->info("$totalPosts posts seeded successfully with random category relations!");
    }
}
