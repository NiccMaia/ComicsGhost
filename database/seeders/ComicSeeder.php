<?php

use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicSeeder extends Seeder
{
    public function run()
    {
        Comic::create([
            'title' => 'Invincible #144',
            'issue_number' => '144',
            'genre' => 'Ação',
            'description' => 'The end of all things',
            'image_url' => 'invincible_144.jpg'
        ]);

        Comic::create([
            'title' => 'Batman #150',
            'issue_number' => '150',
            'genre' => 'Suspense',
            'description' => 'Absolute Power Tie-in',
            'image_url' => 'batman_150.jpg'
        ]);
    }
}


