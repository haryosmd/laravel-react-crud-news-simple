<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('news')->delete();
        // for($i = 0; $i < 20; $i++) {
        //     DB::table('news')->insert([
        //         'title' => fake()->title(),
        //         'description' => fake()->paragraph(2, true),
        //         'category' => fake()->sentence(),
        //         'author' => fake()->email(),
        //     ]);
        // }
        // $this->command->info('News table seeded!');
        News::factory(10)->count(50)->create();
    }
}
