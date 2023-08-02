<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('positions')->insert([
            [
                'name_en' => 'Background CG Artist',
                'name_ua' => 'Background CG Artist',
                'name_ru' => 'Background CG Artist',
                'name_de' => 'Background CG Artist',

                'description_en' => 'Job description: back ground design / creation using various CG',
                'description_ua' => 'Job description: back ground design / creation using various CG',
                'description_ru' => 'Job description: back ground design / creation using various CG',
                'description_de' => 'Job description: back ground design / creation using various CG',

                'software_en' => 'Software: CINEMA 4D, Houdini, Blender, Maya, 3ds Max, Adobe, Substance, Zbrush, Nuke',
                'software_ua' => 'Software: CINEMA 4D, Houdini, Blender, Maya, 3ds Max, Adobe, Substance, Zbrush, Nuke',
                'software_ru' => 'Software: CINEMA 4D, Houdini, Blender, Maya, 3ds Max, Adobe, Substance, Zbrush, Nuke',
                'software_de' => 'Software: CINEMA 4D, Houdini, Blender, Maya, 3ds Max, Adobe, Substance, Zbrush, Nuke',
            ],

            [
                'name_en' => 'CG Compositor',
                'name_ua' => 'CG Compositor',
                'name_ru' => 'CG Compositor',
                'name_de' => 'CG Compositor',

                'description_en' => 'Job description: CG live action compositing using Nuke.',
                'description_ua' => 'Job description: CG live action compositing using Nuke.',
                'description_ru' => 'Job description: CG live action compositing using Nuke.',
                'description_de' => 'Job description: CG live action compositing using Nuke.',

                'software_en' => 'Software: CINEMA 4D, Houdini, Blender, Maya, 3ds Max, Adobe, Substance, Zbrush, Nuke',
                'software_ua' => 'Software: CINEMA 4D, Houdini, Blender, Maya, 3ds Max, Adobe, Substance, Zbrush, Nuke',
                'software_ru' => 'Software: CINEMA 4D, Houdini, Blender, Maya, 3ds Max, Adobe, Substance, Zbrush, Nuke',
                'software_de' => 'Software: CINEMA 4D, Houdini, Blender, Maya, 3ds Max, Adobe, Substance, Zbrush, Nuke',
            ],

            [
                'name_en' => 'Chief',
                'name_ua' => 'Chief',
                'name_ru' => 'Chief',
                'name_de' => 'Chief',

                'description_en' => 'Job description: Product quality management of local staff.',
                'description_ua' => 'Job description: Product quality management of local staff.',
                'description_ru' => 'Job description: Product quality management of local staff.',
                'description_de' => 'Job description: Product quality management of local staff.',

                'software_en' => 'Software: CINEMA 4D, Houdini, Blender, Maya, 3ds Max, Adobe, Substance, Zbrush, Nuke',
                'software_ua' => 'Software: CINEMA 4D, Houdini, Blender, Maya, 3ds Max, Adobe, Substance, Zbrush, Nuke',
                'software_ru' => 'Software: CINEMA 4D, Houdini, Blender, Maya, 3ds Max, Adobe, Substance, Zbrush, Nuke',
                'software_de' => 'Software: CINEMA 4D, Houdini, Blender, Maya, 3ds Max, Adobe, Substance, Zbrush, Nuke',
            ],
        ]);
    }
}
