<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SoftwareSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('software')->insert([
            [
                'name' => 'Marmoset',
                'image' => 'software/Marmoset.png',
            ],
            [
                'name' => 'Maya',
                'image' => 'software/Maya.png',
            ],
            [
                'name' => 'Photoshop',
                'image' => 'software/Photoshop.png',
            ],
            [
                'name' => 'RizomUV',
                'image' => 'software/RizomUV.png',
            ],
            [
                'name' => 'Substance',
                'image' => 'software/Substance.png',
            ],
            [
                'name' => 'UVLayout',
                'image' => 'software/UVLayout.png',
            ],
            [
                'name' => 'ZBrush',
                'image' => 'software/ZBrush.png',
            ],
        ]);
    }
}
