<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SoftwareWorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('software_work')->insert([
            // WORK 1

            [
                'work_id' => 1,
                'software_id' => 1,
            ],
            [
                'work_id' => 1,
                'software_id' => 2,
            ],
            [
                'work_id' => 1,
                'software_id' => 3,
            ],

            // WORK 2

            [
                'work_id' => 2,
                'software_id' => 1,
            ],
            [
                'work_id' => 2,
                'software_id' => 3,
            ],
            [
                'work_id' => 2,
                'software_id' => 4,
            ],

            // WORK 3

            [
                'work_id' => 3,
                'software_id' => 1,
            ],
            [
                'work_id' => 3,
                'software_id' => 2,
            ],

            // WORK 4

            [
                'work_id' => 4,
                'software_id' => 2,
            ],
            [
                'work_id' => 4,
                'software_id' => 3,
            ],
            [
                'work_id' => 4,
                'software_id' => 5,
            ],

            // WORK 5

            [
                'work_id' => 5,
                'software_id' => 1,
            ],
            [
                'work_id' => 5,
                'software_id' => 2,
            ],
            [
                'work_id' => 5,
                'software_id' => 5,
            ],

            // WORK 6

            [
                'work_id' => 6,
                'software_id' => 1,
            ],
            [
                'work_id' => 6,
                'software_id' => 2,
            ],
            [
                'work_id' => 6,
                'software_id' => 3,
            ],

            // WORK 7

            [
                'work_id' => 7,
                'software_id' => 3,
            ],
            [
                'work_id' => 7,
                'software_id' => 4,
            ],
            [
                'work_id' => 7,
                'software_id' => 5,
            ],

            // WORK 8

            [
                'work_id' => 8,
                'software_id' => 1,
            ],
            [
                'work_id' => 8,
                'software_id' => 2,
            ],
            [
                'work_id' => 8,
                'software_id' => 3,
            ],

            // WORK 9

            [
                'work_id' => 9,
                'software_id' => 1,
            ],
            [
                'work_id' => 9,
                'software_id' => 2,
            ],
            [
                'work_id' => 9,
                'software_id' => 3,
            ],

            // WORK 10

            [
                'work_id' => 10,
                'software_id' => 1,
            ],
            [
                'work_id' => 10,
                'software_id' => 2,
            ],
            [
                'work_id' => 10,
                'software_id' => 3,
            ],

            // WORK 11

            [
                'work_id' => 11,
                'software_id' => 1,
            ],
            [
                'work_id' => 11,
                'software_id' => 2,
            ],
            [
                'work_id' => 11,
                'software_id' => 3,
            ],

            // WORK 12

            [
                'work_id' => 12,
                'software_id' => 1,
            ],
            [
                'work_id' => 12,
                'software_id' => 2,
            ],

            // WORK 13

            [
                'work_id' => 13,
                'software_id' => 1,
            ],
            [
                'work_id' => 13,
                'software_id' => 2,
            ],
        ]);
    }
}
