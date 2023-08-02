<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('works')->insert([
            [
                'code' => 'work_1',

                'name_en' => 'Roof Material',
                'name_ua' => 'Roof Material',
                'name_ru' => 'Roof Material',
                'name_de' => 'Roof Material',

                'small_description_en' => 'PolygoNerds',
                'small_description_ua' => 'PolygoNerds',
                'small_description_ru' => 'PolygoNerds',
                'small_description_de' => 'PolygoNerds',

                'description_en' => 'Our Roof material in Substance Designer.',
                'description_ua' => 'Наш покрівельний матеріал в конструкторі Substance Designer.',
                'description_ru' => 'Наш материал для крыши в Substance Designer.',
                'description_de' => 'Unser Dachmaterial in Substance Designer.',

                'cover_img' => 'works/1.jpg',
            ],
            [
                'code' => 'work_2',

                'name_en' => 'Sloop',
                'name_ua' => 'Sloop',
                'name_ru' => 'Sloop',
                'name_de' => 'Sloop',

                'small_description_en' => 'PolygoNerds',
                'small_description_ua' => 'PolygoNerds',
                'small_description_ru' => 'PolygoNerds',
                'small_description_de' => 'PolygoNerds',

                'description_en' => 'Sloop for videogame project.',
                'description_ua' => 'Шлюп для проекту відеоігри.',
                'description_ru' => 'Шлюп для проекта видеоигры.',
                'description_de' => 'Schaluppe für Videospielprojekt.',

                'cover_img' => 'works/2.jpg',
            ],
            [
                'code' => 'work_3',

                'name_en' => 'Grill',
                'name_ua' => 'Grill',
                'name_ru' => 'Grill',
                'name_de' => 'Grill',

                'small_description_en' => 'PolygoNerds',
                'small_description_ua' => 'PolygoNerds',
                'small_description_ru' => 'PolygoNerds',
                'small_description_de' => 'PolygoNerds',

                'description_en' => 'Grill for videogame project.',
                'description_ua' => 'Гриль для відеоігрового проекту.',
                'description_ru' => 'Гриль для проекта видеоигры.',
                'description_de' => 'Grill für Videospielprojekt.',

                'cover_img' => 'works/3.jpg',
            ],
            [
                'code' => 'work_4',

                'name_en' => 'Unit Stand',
                'name_ua' => 'Unit Stand',
                'name_ru' => 'Unit Stand',
                'name_de' => 'Unit Stand',

                'small_description_en' => 'PolygoNerds',
                'small_description_ua' => 'PolygoNerds',
                'small_description_ru' => 'PolygoNerds',
                'small_description_de' => 'PolygoNerds',

                'description_en' => 'Unit Stand for videogame project.',
                'description_ua' => 'Юніт-стенд для відеоігрового проекту.',
                'description_ru' => 'Стенд для видеоигр.',
                'description_de' => 'Unit Stand für Videospielprojekt.',

                'cover_img' => 'works/4.jpg',
            ],
            [
                'code' => 'work_5',

                'name_en' => 'Tavern',
                'name_ua' => 'Tavern',
                'name_ru' => 'Tavern',
                'name_de' => 'Tavern',

                'small_description_en' => 'PolygoNerds',
                'small_description_ua' => 'PolygoNerds',
                'small_description_ru' => 'PolygoNerds',
                'small_description_de' => 'PolygoNerds',

                'description_en' => 'Tavern for videogame project.',
                'description_ua' => 'Таверна для проекту відеоігор.',
                'description_ru' => 'Таверна для проекта видеоигры.',
                'description_de' => 'Taverne für Videospielprojekt.',

                'cover_img' => 'works/5.jpg',
            ],
            [
                'code' => 'work_6',

                'name_en' => 'Bone Cave',
                'name_ua' => 'Bone Cave',
                'name_ru' => 'Bone Cave',
                'name_de' => 'Bone Cave',

                'small_description_en' => 'PolygoNerds',
                'small_description_ua' => 'PolygoNerds',
                'small_description_ru' => 'PolygoNerds',
                'small_description_de' => 'PolygoNerds',

                'description_en' => 'Bone Cave for videogame project.',
                'description_ua' => 'Bone Cave для проекту відеоігри.',
                'description_ru' => 'Костяная пещера для проекта видеоигры.',
                'description_de' => 'Bone Cave für ein Videospielprojekt.',

                'cover_img' => 'works/6.jpg',
            ],
            [
                'code' => 'work_7',

                'name_en' => 'Tower',
                'name_ua' => 'Tower',
                'name_ru' => 'Tower',
                'name_de' => 'Tower',

                'small_description_en' => 'PolygoNerds',
                'small_description_ua' => 'PolygoNerds',
                'small_description_ru' => 'PolygoNerds',
                'small_description_de' => 'PolygoNerds',

                'description_en' => 'Tower model for videogame project.',
                'description_ua' => 'Модель вежі для проекту відеоігри.',
                'description_ru' => 'Модель башни для проекта видеоигры.',
                'description_de' => 'Turmmodell für Videospielprojekt.',

                'cover_img' => 'works/7.jpg',
            ],
            [
                'code' => 'work_8',

                'name_en' => 'Portal',
                'name_ua' => 'Portal',
                'name_ru' => 'Portal',
                'name_de' => 'Portal',

                'small_description_en' => 'PolygoNerds',
                'small_description_ua' => 'PolygoNerds',
                'small_description_ru' => 'PolygoNerds',
                'small_description_de' => 'PolygoNerds',

                'description_en' => 'Portal model for videogame project.',
                'description_ua' => 'Модель порталу для відеоігрового проекту.',
                'description_ru' => 'Модель портала для проекта видеоигры.',
                'description_de' => 'Portalmodell für ein Videospielprojekt.',

                'cover_img' => 'works/8.jpg',
            ],
            [
                'code' => 'work_9',

                'name_en' => 'Cartoony House',
                'name_ua' => 'Cartoony House',
                'name_ru' => 'Cartoony House',
                'name_de' => 'Cartoony House',

                'small_description_en' => 'PolygoNerds',
                'small_description_ua' => 'PolygoNerds',
                'small_description_ru' => 'PolygoNerds',
                'small_description_de' => 'PolygoNerds',

                'description_en' => 'The model was inspired by a concept of extremely talented artist Etienne Savoie.',
                'description_ua' => 'Модель була натхненна концепцією надзвичайно талановитого художника Етьєна Савуа.',
                'description_ru' => 'Модель была вдохновлена концепцией чрезвычайно талантливого художника Этьена Савуа.',
                'description_de' => 'Das Modell wurde von einem Konzept des äußerst talentierten Künstlers Etienne Savoie inspiriert.',

                'cover_img' => 'works/9.jpg',
            ],
            [
                'code' => 'work_10',

                'name_en' => 'Incense Farmer',
                'name_ua' => 'Incense Farmer',
                'name_ru' => 'Incense Farmer',
                'name_de' => 'Incense Farmer',

                'small_description_en' => 'PolygoNerds',
                'small_description_ua' => 'PolygoNerds',
                'small_description_ru' => 'PolygoNerds',
                'small_description_de' => 'PolygoNerds',

                'description_en' => "Summer is coming and here's the model of a girl who knows how to deal with a garden dwellers.",
                'description_ua' => "Наближається літо, і ось модель дівчини, яка знає, як поводитися з мешканцями саду.",
                'description_ru' => "Скоро лето, и вот модель девушки, которая знает, как справиться с обитателями сада.",
                'description_de' => "Der Sommer kommt und hier ist das Modell eines Mädchens, das weiß, wie man mit Gartenbewohnern umgeht.",

                'cover_img' => 'works/10.jpg',
            ],
            [
                'code' => 'work_11',

                'name_en' => 'LowPoly Office',
                'name_ua' => 'LowPoly Office',
                'name_ru' => 'LowPoly Office',
                'name_de' => 'LowPoly Office',

                'small_description_en' => 'PolygoNerds',
                'small_description_ua' => 'PolygoNerds',
                'small_description_ru' => 'PolygoNerds',
                'small_description_de' => 'PolygoNerds',

                'description_en' => '',
                'description_ua' => '',
                'description_ru' => '',
                'description_de' => '',

                'cover_img' => 'works/11.jpg',
            ],
            [
                'code' => 'work_12',

                'name_en' => 'Viking Chest',
                'name_ua' => 'Viking Chest',
                'name_ru' => 'Viking Chest',
                'name_de' => 'Viking Chest',

                'small_description_en' => 'PolygoNerds',
                'small_description_ua' => 'PolygoNerds',
                'small_description_ru' => 'PolygoNerds',
                'small_description_de' => 'PolygoNerds',

                'description_en' => 'Hei you all brave and mighty warriors! Show no mercy to your enemies and always keep your belongings in a sturdy chest.',
                'description_ua' => 'Вітаю вас, хоробрі та могутні воїни! Не знайте пощади до ворогів і завжди зберігайте своє майно у міцній скрині.',
                'description_ru' => 'Привет всем храбрым и могучим воинам! Не проявляйте милосердия к врагам и всегда храните свои вещи в прочном сундуке.',
                'description_de' => 'Hei ihr tapferen und mächtigen Krieger! Zeigt keine Gnade mit euren Feinden und bewahrt euer Hab und Gut immer in einer stabilen Truhe auf.',

                'cover_img' => 'works/12.jpg',
            ],
            [
                'code' => 'work_13',

                'name_en' => 'Springfield XD Mod.2 (sub-compact)',
                'name_ua' => 'Springfield XD Mod.2 (sub-compact)',
                'name_ru' => 'Springfield XD Mod.2 (sub-compact)',
                'name_de' => 'Springfield XD Mod.2 (sub-compact)',

                'small_description_en' => 'PolygoNerds',
                'small_description_ua' => 'PolygoNerds',
                'small_description_ru' => 'PolygoNerds',
                'small_description_de' => 'PolygoNerds',

                'description_en' => 'This is the model of Springfield XD Mod.2 handgun which was made through tutorial by Eugene Petrov.',
                'description_ua' => 'Це модель пістолета Springfield XD Mod.2, виготовлена за майстер-класом Євгена Петрова.',
                'description_ru' => 'Это модель пистолета Springfield XD Mod.2, сделанная по учебному пособию Евгения Петрова.',
                'description_de' => 'Dies ist das Modell der Springfield XD Mod.2 Handfeuerwaffe, die durch Tutorial von Eugene Petrov gemacht wurde.',

                'cover_img' => 'works/13.jpg',
            ],
        ]);
    }
}
