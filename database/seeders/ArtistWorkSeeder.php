<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtistWorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('artist_work')->insert([
            // WORK 1

            [
                'work_id' => 1,
                'artist_id' => 1,
            ],
            [
                'work_id' => 1,
                'artist_id' => 2,
            ],
            [
                'work_id' => 1,
                'artist_id' => 3,
            ],

            // WORK 2

            [
                'work_id' => 2,
                'artist_id' => 1,
            ],
            [
                'work_id' => 2,
                'artist_id' => 2,
            ],
            [
                'work_id' => 2,
                'artist_id' => 3,
            ],
            [
                'work_id' => 2,
                'artist_id' => 4,
            ],

            // WORK 3

            [
                'work_id' => 3,
                'artist_id' => 1,
            ],
            [
                'work_id' => 3,
                'artist_id' => 2,
            ],

            // WORK 4

            [
                'work_id' => 4,
                'artist_id' => 1,
            ],
            [
                'work_id' => 4,
                'artist_id' => 2,
            ],
            [
                'work_id' => 4,
                'artist_id' => 3,
            ],
            [
                'work_id' => 4,
                'artist_id' => 4,
            ],
            [
                'work_id' => 4,
                'artist_id' => 5,
            ],

            // WORK 5

            [
                'work_id' => 5,
                'artist_id' => 1,
            ],
            [
                'work_id' => 5,
                'artist_id' => 2,
            ],
            [
                'work_id' => 5,
                'artist_id' => 3,
            ],
            [
                'work_id' => 5,
                'artist_id' => 4,
            ],
            [
                'work_id' => 5,
                'artist_id' => 5,
            ],

            // WORK 6

            [
                'work_id' => 6,
                'artist_id' => 1,
            ],
            [
                'work_id' => 6,
                'artist_id' => 2,
            ],
            [
                'work_id' => 6,
                'artist_id' => 3,
            ],
            [
                'work_id' => 6,
                'artist_id' => 4,
            ],
            [
                'work_id' => 6,
                'artist_id' => 5,
            ],

            // WORK 7

            [
                'work_id' => 7,
                'artist_id' => 1,
            ],
            [
                'work_id' => 7,
                'artist_id' => 2,
            ],
            [
                'work_id' => 7,
                'artist_id' => 3,
            ],
            [
                'work_id' => 7,
                'artist_id' => 4,
            ],
            [
                'work_id' => 7,
                'artist_id' => 5,
            ],

            // WORK 8

            [
                'work_id' => 8,
                'artist_id' => 1,
            ],
            [
                'work_id' => 8,
                'artist_id' => 2,
            ],
            [
                'work_id' => 8,
                'artist_id' => 3,
            ],

            // WORK 9

            [
                'work_id' => 9,
                'artist_id' => 1,
            ],
            [
                'work_id' => 9,
                'artist_id' => 2,
            ],
            [
                'work_id' => 9,
                'artist_id' => 3,
            ],

            // WORK 10

            [
                'work_id' => 10,
                'artist_id' => 1,
            ],
            [
                'work_id' => 10,
                'artist_id' => 2,
            ],
            [
                'work_id' => 10,
                'artist_id' => 3,
            ],

            // WORK 11

            [
                'work_id' => 11,
                'artist_id' => 1,
            ],
            [
                'work_id' => 11,
                'artist_id' => 2,
            ],
            [
                'work_id' => 11,
                'artist_id' => 3,
            ],

            // WORK 12

            [
                'work_id' => 12,
                'artist_id' => 1,
            ],
            [
                'work_id' => 12,
                'artist_id' => 2,
            ],

            // WORK 13

            [
                'work_id' => 13,
                'artist_id' => 1,
            ],
            [
                'work_id' => 13,
                'artist_id' => 2,
            ],
        ]);
    }
}
