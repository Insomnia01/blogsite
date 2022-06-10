<?php

namespace Database\Seeders;
use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i<=20; $i++)
          {
            $data[] = [
            'title' => Str::random(7),
            'postby' => Str::random(12),
            'date' => now()->toDateTimeString(),
            'content' => Str::random(20),
            'status' => 'Active',
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
            ];
          }
        $chunks = array_chunk($data,4);
        foreach($chunks as $chunk) {
          Post::insert($chunk);
        }
    }
}
