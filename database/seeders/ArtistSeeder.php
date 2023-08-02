<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('artists')->insert([
            [
                'code' => 'masaki_mizuno',

                'title' => 'polygonerds | Masaki Mizuno | Design Company',

                'name_en' => 'Masaki Mizuno',
                'name_ua' => 'Masaki Mizuno',
                'name_ru' => 'Masaki Mizuno',
                'name_de' => 'Masaki Mizuno',

                'position_en' => 'CEO / Founder | Online Editor / Producer',
                'position_ua' => 'CEO / Founder | Online Editor / Producer',
                'position_ru' => 'CEO / Founder | Online Editor / Producer',
                'position_de' => 'CEO / Founder | Online Editor / Producer',

                'description_en' => '3D tracking, effects, compositing. Specialist in 3D tracking and 3D scanning. He is experienced in location shooting and likes to give advice about the best possible way of shooting.',
                'description_ua' => '3D tracking, effects, compositing. Specialist in 3D tracking and 3D scanning. He is experienced in location shooting and likes to give advice about the best possible way of shooting.',
                'description_ru' => '3D tracking, effects, compositing. Specialist in 3D tracking and 3D scanning. He is experienced in location shooting and likes to give advice about the best possible way of shooting.',
                'description_de' => '3D tracking, effects, compositing. Specialist in 3D tracking and 3D scanning. He is experienced in location shooting and likes to give advice about the best possible way of shooting.',

                'image' => 'artists/AlyonaYa_Photo_01_enhanced.png',
                'image_sqr' => 'artists/AlyonaYa_Photo_01_square.png',
            ],
            [
                'code' => 'yota_tasaki',

                'title' => 'polygonerds | Yota Tasaki | Design Company',

                'name_en' => 'Yota Tasaki',
                'name_ua' => 'Yota Tasaki',
                'name_ru' => 'Yota Tasaki',
                'name_de' => 'Yota Tasaki',

                'position_en' => 'Co-Founder | CG Director / Environment Design',
                'position_ua' => 'Co-Founder | CG Director / Environment Design',
                'position_ru' => 'Co-Founder | CG Director / Environment Design',
                'position_de' => 'Co-Founder | CG Director / Environment Design',

                'description_en' => '3D tracking, effects, compositing. Specialist in 3D tracking and 3D scanning. He is experienced in location shooting and likes to give advice about the best possible way of shooting.',
                'description_ua' => '3D tracking, effects, compositing. Specialist in 3D tracking and 3D scanning. He is experienced in location shooting and likes to give advice about the best possible way of shooting.',
                'description_ru' => '3D tracking, effects, compositing. Specialist in 3D tracking and 3D scanning. He is experienced in location shooting and likes to give advice about the best possible way of shooting.',
                'description_de' => '3D tracking, effects, compositing. Specialist in 3D tracking and 3D scanning. He is experienced in location shooting and likes to give advice about the best possible way of shooting.',

                'image' => 'artists/photo_Anton_enhanced.png',
                'image_sqr' => 'artists/photo_Anton_square.png',
            ],
            [
                'code' => 'mishio_hirai',

                'title' => 'polygonerds | Mishio Hirai | Design Company',

                'name_en' => 'Mishio Hirai',
                'name_ua' => 'Mishio Hirai',
                'name_ru' => 'Mishio Hirai',
                'name_de' => 'Mishio Hirai',

                'position_en' => 'Co-Founder | CG Director / Art Director',
                'position_ua' => 'Co-Founder | CG Director / Art Director',
                'position_ru' => 'Co-Founder | CG Director / Art Director',
                'position_de' => 'Co-Founder | CG Director / Art Director',

                'description_en' => '3D tracking, effects, compositing. Specialist in 3D tracking and 3D scanning. He is experienced in location shooting and likes to give advice about the best possible way of shooting.',
                'description_ua' => '3D tracking, effects, compositing. Specialist in 3D tracking and 3D scanning. He is experienced in location shooting and likes to give advice about the best possible way of shooting.',
                'description_ru' => '3D tracking, effects, compositing. Specialist in 3D tracking and 3D scanning. He is experienced in location shooting and likes to give advice about the best possible way of shooting.',
                'description_de' => '3D tracking, effects, compositing. Specialist in 3D tracking and 3D scanning. He is experienced in location shooting and likes to give advice about the best possible way of shooting.',

                'image' => 'artists/photo_Artem_enhanced.png',
                'image_sqr' => 'artists/photo_Artem_square.png',
            ],
            [
                'code' => 'keitaro_toyoda',

                'title' => 'polygonerds | Keitaro Toyoda | Design Company',

                'name_en' => 'Keitaro Toyoda',
                'name_ua' => 'Keitaro Toyoda',
                'name_ru' => 'Keitaro Toyoda',
                'name_de' => 'Keitaro Toyoda',

                'position_en' => 'Diector / Motion Designer',
                'position_ua' => 'Diector / Motion Designer',
                'position_ru' => 'Diector / Motion Designer',
                'position_de' => 'Diector / Motion Designer',

                'description_en' => '3D tracking, effects, compositing. Specialist in 3D tracking and 3D scanning. He is experienced in location shooting and likes to give advice about the best possible way of shooting.',
                'description_ua' => '3D tracking, effects, compositing. Specialist in 3D tracking and 3D scanning. He is experienced in location shooting and likes to give advice about the best possible way of shooting.',
                'description_ru' => '3D tracking, effects, compositing. Specialist in 3D tracking and 3D scanning. He is experienced in location shooting and likes to give advice about the best possible way of shooting.',
                'description_de' => '3D tracking, effects, compositing. Specialist in 3D tracking and 3D scanning. He is experienced in location shooting and likes to give advice about the best possible way of shooting.',

                'image' => 'artists/photo_Daria_02_enhanced_02.png',
                'image_sqr' => 'artists/photo_Daria_02_square.png',
            ],
            [
                'code' => 'mami_watanabe',

                'title' => 'polygonerds | Mami Watanabe | Design Company',

                'name_en' => 'Mami Watanabe',
                'name_ua' => 'Mami Watanabe',
                'name_ru' => 'Mami Watanabe',
                'name_de' => 'Mami Watanabe',

                'position_en' => 'Online Editor',
                'position_ua' => 'Online Editor',
                'position_ru' => 'Online Editor',
                'position_de' => 'Online Editor',

                'description_en' => '3D tracking, effects, compositing. Specialist in 3D tracking and 3D scanning. He is experienced in location shooting and likes to give advice about the best possible way of shooting.',
                'description_ua' => '3D tracking, effects, compositing. Specialist in 3D tracking and 3D scanning. He is experienced in location shooting and likes to give advice about the best possible way of shooting.',
                'description_ru' => '3D tracking, effects, compositing. Specialist in 3D tracking and 3D scanning. He is experienced in location shooting and likes to give advice about the best possible way of shooting.',
                'description_de' => '3D tracking, effects, compositing. Specialist in 3D tracking and 3D scanning. He is experienced in location shooting and likes to give advice about the best possible way of shooting.',

                'image' => 'artists/photo_Vitaliy_enhanced_02.png',
                'image_sqr' => 'artists/photo_Vitaliy_square.png',
            ],
        ]);
    }
}
