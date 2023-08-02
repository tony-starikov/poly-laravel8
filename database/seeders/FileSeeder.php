<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('files')->insert([

            // Work 1

            [
                'work_id' => '1',
                'type' => 'image',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/polygonerds-tbrender-viewport.jpeg',
            ],
            [
                'work_id' => '1',
                'type' => 'video',
                'video_mp4' => 'works/roofmaterial-turntable-01.mp4',
                'video_webm' => 'works/roofmaterial-turntable-01.webm',
                'src' => null,
            ],

            // Work 2

            [
                'work_id' => '2',
                'type' => 'image',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/polygonerds-ship-1.jpeg',
            ],
            [
                'work_id' => '2',
                'type' => 'image',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/polygonerds-12.jpeg',
            ],
            [
                'work_id' => '2',
                'type' => 'video',
                'video_mp4' => 'works/sloop-draftvideo-1.mp4',
                'video_webm' => 'works/sloop-draftvideo-1.webm',
                'src' => null,
            ],

            // Work 3

            [
                'work_id' => '3',
                'type' => 'image',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/polygonerds-image-011.jpeg',
            ],
            [
                'work_id' => '3',
                'type' => 'image',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/polygonerds-image-02.jpeg',
            ],
            [
                'work_id' => '3',
                'type' => 'image',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/polygonerds-image-04.jpeg',
            ],
            [
                'work_id' => '3',
                'type' => 'image',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/polygonerds-image-05.jpeg',
            ],
            [
                'work_id' => '3',
                'type' => 'image',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/polygonerds-image-03.jpeg',
            ],

            // Work 4

            [
                'work_id' => '4',
                'type' => 'image',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/polygonerds-image-012.jpeg',
            ],
            [
                'work_id' => '4',
                'type' => 'image',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/polygonerds-image-022.jpeg',
            ],
            [
                'work_id' => '4',
                'type' => 'image',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/polygonerds-image-034.jpeg',
            ],
            [
                'work_id' => '4',
                'type' => 'video',
                'video_mp4' => 'works/unitsstand-turntablevideo-01.mp4',
                'video_webm' => 'works/unitsstand-turntablevideo-01.webm',
                'src' => null,
            ],

            // Work 5

            [
                'work_id' => '5',
                'type' => 'image',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/polygonerds-screenshot000.jpeg',
            ],
            [
                'work_id' => '5',
                'type' => 'image',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/polygonerds-screenshot003.jpeg',
            ],
            [
                'work_id' => '5',
                'type' => 'marmoset',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'https://www.artstation.com/embed/37980178',
            ],
            [
                'work_id' => '5',
                'type' => 'video',
                'video_mp4' => 'works/inn-turntablevideo-01.mp4',
                'video_webm' => 'works/inn-turntablevideo-01.webm',
                'src' => null,
            ],

            // Work 6

            [
                'work_id' => '6',
                'type' => 'image',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/polygonerds-image-06.jpeg',
            ],
            [
                'work_id' => '6',
                'type' => 'image',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/polygonerds-image-061.jpeg',
            ],
            [
                'work_id' => '6',
                'type' => 'image',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/polygonerds-image-063.jpeg',
            ],
            [
                'work_id' => '6',
                'type' => 'image',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/polygonerds-image-064.jpeg',
            ],
            [
                'work_id' => '6',
                'type' => 'marmoset',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'https://www.artstation.com/embed/37978427',
            ],

            // Work 7

            [
                'work_id' => '7',
                'type' => 'image',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/polygonerds-image-07.jpeg',
            ],
            [
                'work_id' => '7',
                'type' => 'image',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/polygonerds-image-071.jpeg',
            ],
            [
                'work_id' => '7',
                'type' => 'image',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/polygonerds-image-073.jpeg',
            ],
            [
                'work_id' => '7',
                'type' => 'image',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/polygonerds-image-074.jpeg',
            ],
            [
                'work_id' => '7',
                'type' => 'image',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/polygonerds-image-075.jpeg',
            ],
            [
                'work_id' => '7',
                'type' => 'marmoset',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'https://www.artstation.com/embed/37978294',
            ],
            [
                'work_id' => '7',
                'type' => 'video',
                'video_mp4' => 'works/tower-turntablevideo-01.mp4',
                'video_webm' => 'works/tower-turntablevideo-01.webm',
                'src' => null,
            ],

            // Work 8

            [
                'work_id' => '8',
                'type' => 'image',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/polygonerds-image-08.jpeg',
            ],
            [
                'work_id' => '8',
                'type' => 'image',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/polygonerds-image-081.jpeg',
            ],
            [
                'work_id' => '8',
                'type' => 'image',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/polygonerds-image-082.jpeg',
            ],
            [
                'work_id' => '8',
                'type' => 'video',
                'video_mp4' => 'works/portal-turntablevideo-01.mp4',
                'video_webm' => 'works/portal-turntablevideo-01.webm',
                'src' => null,
            ],

            // Work 9

            [
                'work_id' => '9',
                'type' => 'image',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/polygonerds-ch-render-09.jpeg',
            ],
            [
                'work_id' => '9',
                'type' => 'image',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/polygonerds-ch-render-091.jpeg',
            ],
            [
                'work_id' => '9',
                'type' => 'image',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/polygonerds-ch-render-092.jpeg',
            ],
            [
                'work_id' => '9',
                'type' => 'video',
                'video_mp4' => 'works/ch-render-turn-01.mp4',
                'video_webm' => 'works/ch-render-turn-01.webm',
                'src' => null,
            ],

            // Work 10

            [
                'work_id' => '10',
                'type' => 'image',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/polygonerds-if-image-01.jpeg',
            ],
            [
                'work_id' => '10',
                'type' => 'image',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/polygonerds-if-render-03.jpeg',
            ],
            [
                'work_id' => '10',
                'type' => 'image',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/polygonerds-if-render-06.jpeg',
            ],

            // Work 11

            [
                'work_id' => '11',
                'type' => 'image',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/polygonerds-lowpolyoffice-image-01-01.jpeg',
            ],
            [
                'work_id' => '11',
                'type' => 'image',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/polygonerds-lowpolyoffice-image-02-01.jpeg',
            ],
            [
                'work_id' => '11',
                'type' => 'video',
                'video_mp4' => 'works/lowpolyoffice-video-04.mp4',
                'video_webm' => 'works/lowpolyoffice-video-04.webm',
                'src' => null,
            ],

            // Work 12

            [
                'work_id' => '12',
                'type' => 'image',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/polygonerds-1.jpeg',
            ],
            [
                'work_id' => '12',
                'type' => 'image',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/polygonerds-4.jpeg',
            ],
            [
                'work_id' => '12',
                'type' => 'video',
                'video_mp4' => 'works/viking-schest-preview-video-01-01.mp4',
                'video_webm' => 'works/viking-schest-preview-video-01-01.webm',
                'src' => null,
            ],

            // Work 13

            [
                'work_id' => '13',
                'type' => 'image',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/polygonerds-springfield-render-2.jpeg',
            ],
            [
                'work_id' => '13',
                'type' => 'gif',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/polygonerds-opening-3.gif',
            ],
            [
                'work_id' => '13',
                'type' => 'video',
                'video_mp4' => 'works/polygonerds-springfieldvideo-01.mp4',
                'video_webm' => 'works/polygonerds-springfieldvideo-01.webm',
                'src' => null,
            ],
            [
                'work_id' => '13',
                'type' => 'image',
                'video_mp4' => null,
                'video_webm' => null,
                'src' => 'works/polygonerds-springfield-render-1.jpeg',
            ],

        ]);
    }
}
