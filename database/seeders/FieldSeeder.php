<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FieldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('fields')->insert([

            // Main

            [
                'id' => 1,
                'name' => 'field_slogan_en',
                'value' => 'WE TAKE THE JOB SERIOUSLY OURSELVES? NOT MUCH',
            ],

            [
                'id' => 2,
                'name' => 'field_slogan_ua',
                'value' => 'WE TAKE THE JOB SERIOUSLY OURSELVES? NOT MUCH',
            ],

            [
                'id' => 3,
                'name' => 'field_slogan_ru',
                'value' => 'WE TAKE THE JOB SERIOUSLY OURSELVES? NOT MUCH',
            ],

            [
                'id' => 4,
                'name' => 'field_slogan_de',
                'value' => 'WE TAKE THE JOB SERIOUSLY OURSELVES? NOT MUCH',
            ],

            // Work

            [
                'id' => 5,
                'name' => 'field_artists_en',
                'value' => 'ARTISTS',
            ],

            [
                'id' => 6,
                'name' => 'field_artists_ua',
                'value' => 'МИТЦІ',
            ],

            [
                'id' => 7,
                'name' => 'field_artists_ru',
                'value' => 'ТВОРЦЫ',
            ],

            [
                'id' => 8,
                'name' => 'field_artists_de',
                'value' => 'KREATOREN',
            ],

            [
                'id' => 9,
                'name' => 'field_software_en',
                'value' => 'SOFT',
            ],

            [
                'id' => 10,
                'name' => 'field_software_ua',
                'value' => 'СОФТ',
            ],

            [
                'id' => 11,
                'name' => 'field_software_ru',
                'value' => 'СОФТ',
            ],

            [
                'id' => 12,
                'name' => 'field_software_de',
                'value' => 'SOFT',
            ],

            // About

            [
                'id' => 13,
                'name' => 'about_description_en',
                'value' => 'PolygoNerds is a team of visual artists based in Ukraine. Everyone in our company is passionate 3D creator on their own, but our greatest power is the ability to fuse into a super-holy-poly-mega team, handling tasks and projects of a greater scope. We specialize in Concept Modeling, 3D Sculpting, Retopologizing, Product Modeling and Rendering, Props and Assets Creation of any kind.',
            ],

            [
                'id' => 14,
                'name' => 'about_description_ua',
                'value' => "
                    PolygoNerds - це команда візуальних художників, що базується в Україні. Кожен у нашій компанії є пристрасним 3D-творцем самостійно, але наша найбільша сила - це здатність об'єднуватися в супер-холі-полі-мега-команду, яка справляється з завданнями та проектами більшого масштабу. Ми спеціалізуємося на концепт-моделюванні, 3D-скульптуванні, ретопологізації, моделюванні та рендерингу продуктів, створенні реквізиту та активів будь-якого типу.
                ",
            ],

            [
                'id' => 15,
                'name' => 'about_description_ru',
                'value' => "
                    PolygoNerds - это команда визуальных художников, базирующаяся в Украине. Каждый в нашей компании является увлеченным 3D-творцом сам по себе, но наша величайшая сила - это способность слиться в супер-холи-поли-мега-команду, выполняя задачи и проекты большего масштаба. Мы специализируемся на концептуальном моделировании, 3D скульптинге, ретопологизации, моделировании и рендеринге продуктов, создании реквизита и активов любого типа.
                ",
            ],

            [
                'id' => 16,
                'name' => 'about_description_de',
                'value' => "
                    PolygoNerds ist ein Team von visuellen Künstlern mit Sitz in der Ukraine. Jeder in unserem Unternehmen ist selbst ein leidenschaftlicher 3D-Künstler, aber unsere größte Stärke ist die Fähigkeit, zu einem super-holy-poly-mega Team zu verschmelzen und Aufgaben und Projekte von größerem Umfang zu bewältigen. Wir sind spezialisiert auf Konzeptmodellierung, 3D-Skulpturierung, Retopologisierung, Produktmodellierung und -rendering, Requisiten und Asset-Erstellung jeglicher Art.
                ",
            ],

            [
                'id' => 17,
                'name' => 'field_company_profile_en',
                'value' => 'COMPANY PROFILE',
            ],

            [
                'id' => 18,
                'name' => 'field_company_profile_ua',
                'value' => 'ПРОФІЛЬ КОМПАНІЇ',
            ],

            [
                'id' => 19,
                'name' => 'field_company_profile_ru',
                'value' => 'ПРОФИЛЬ КОМПАНИИ',
            ],

            [
                'id' => 20,
                'name' => 'field_company_profile_de',
                'value' => 'FIRMENPROFIL',
            ],

            [
                'id' => 21,
                'name' => 'field_company_name_en',
                'value' => 'COMPANY NAME',
            ],

            [
                'id' => 22,
                'name' => 'field_company_name_ua',
                'value' => 'НАЗВА',
            ],

            [
                'id' => 23,
                'name' => 'field_company_name_ru',
                'value' => 'НАЗВАНИЕ',
            ],

            [
                'id' => 24,
                'name' => 'field_company_name_de',
                'value' => 'FIRMENNAME',
            ],

            [
                'id' => 25,
                'name' => 'field_about_location_en',
                'value' => 'LOCATION',
            ],

            [
                'id' => 26,
                'name' => 'field_about_location_ua',
                'value' => 'РОЗТАШУВАННЯ',
            ],

            [
                'id' => 27,
                'name' => 'field_about_location_ru',
                'value' => 'РАСПОЛОЖЕНИЕ',
            ],

            [
                'id' => 28,
                'name' => 'field_about_location_de',
                'value' => 'LOCATION',
            ],

            [
                'id' => 29,
                'name' => 'field_establishment_en',
                'value' => 'ESTABLISHMENT',
            ],

            [
                'id' => 30,
                'name' => 'field_establishment_ua',
                'value' => 'ЗАСНУВАННЯ',
            ],

            [
                'id' => 31,
                'name' => 'field_establishment_ru',
                'value' => 'ОБРАЗОВАНИЕ',
            ],

            [
                'id' => 32,
                'name' => 'field_establishment_de',
                'value' => 'EINRICHTUNG',
            ],

            [
                'id' => 33,
                'name' => 'field_employee_en',
                'value' => 'EMPLOYEES',
            ],

            [
                'id' => 34,
                'name' => 'field_employee_ua',
                'value' => 'ПРАЦІВНИКИ',
            ],

            [
                'id' => 35,
                'name' => 'field_employee_ru',
                'value' => 'РАБОТНИКИ',
            ],

            [
                'id' => 36,
                'name' => 'field_employee_de',
                'value' => 'BESCHÄFTIGTE',
            ],

            [
                'id' => 37,
                'name' => 'field_ceo_en',
                'value' => 'CEO',
            ],

            [
                'id' => 38,
                'name' => 'field_ceo_ua',
                'value' => 'CEO',
            ],

            [
                'id' => 39,
                'name' => 'field_ceo_ru',
                'value' => 'CEO',
            ],

            [
                'id' => 40,
                'name' => 'field_ceo_de',
                'value' => 'CEO',
            ],

            [
                'id' => 41,
                'name' => 'field_director_en',
                'value' => 'DIRECTOR',
            ],

            [
                'id' => 42,
                'name' => 'field_director_ua',
                'value' => 'ДИРЕКТОР',
            ],

            [
                'id' => 43,
                'name' => 'field_director_ru',
                'value' => 'ДИРЕКТОР',
            ],

            [
                'id' => 44,
                'name' => 'field_director_de',
                'value' => 'DIREKTOR',
            ],

            [
                'id' => 45,
                'name' => 'company_name_en',
                'value' => 'PolygoNerds',
            ],

            [
                'id' => 46,
                'name' => 'company_name_ua',
                'value' => 'PolygoNerds',
            ],

            [
                'id' => 47,
                'name' => 'company_name_ru',
                'value' => 'PolygoNerds',
            ],

            [
                'id' => 48,
                'name' => 'company_name_de',
                'value' => 'PolygoNerds',
            ],

            [
                'id' => 49,
                'name' => 'location_text_en',
                'value' => 'Kharkiv, Ukraine',
            ],

            [
                'id' => 50,
                'name' => 'location_text_ua',
                'value' => 'Харків, Україна',
            ],

            [
                'id' => 51,
                'name' => 'location_text_ru',
                'value' => 'Харьков, Украина',
            ],

            [
                'id' => 52,
                'name' => 'location_text_de',
                'value' => 'Kharkiv, Ukraine',
            ],

            [
                'id' => 53,
                'name' => 'establishment_en',
                'value' => '2020',
            ],

            [
                'id' => 54,
                'name' => 'establishment_ua',
                'value' => '2020',
            ],

            [
                'id' => 55,
                'name' => 'establishment_ru',
                'value' => '2020',
            ],

            [
                'id' => 56,
                'name' => 'establishment_de',
                'value' => '2020',
            ],

            [
                'id' => 57,
                'name' => 'employee_en',
                'value' => '15',
            ],

            [
                'id' => 58,
                'name' => 'employee_ua',
                'value' => '15',
            ],

            [
                'id' => 59,
                'name' => 'employee_ru',
                'value' => '15',
            ],

            [
                'id' => 60,
                'name' => 'employee_de',
                'value' => '15',
            ],

            [
                'id' => 61,
                'name' => 'ceo_en',
                'value' => 'Vitaly Vinogradov',
            ],

            [
                'id' => 62,
                'name' => 'ceo_ua',
                'value' => 'Віталій Виноградов',
            ],

            [
                'id' => 63,
                'name' => 'ceo_ru',
                'value' => 'Виталий Виноградов',
            ],

            [
                'id' => 64,
                'name' => 'ceo_de',
                'value' => 'Witali Winogradow',
            ],

            [
                'id' => 65,
                'name' => 'director_en',
                'value' => 'Kirill Obertivich',
            ],

            [
                'id' => 66,
                'name' => 'director_ua',
                'value' => 'Кирило Обертович',
            ],

            [
                'id' => 67,
                'name' => 'director_ru',
                'value' => 'Кирилл Обертович',
            ],

            [
                'id' => 68,
                'name' => 'director_de',
                'value' => 'Kirill Obertivich',
            ],

            // Recruit

            [
                'id' => 69,
                'name' => 'recruit_description_en',
                'value' => 'PolygoNerds currently looking for the positions listed below. If you want to apply to any of these and join our team, contact us with your portfolio and CV to the following e-mail:',
            ],

            [
                'id' => 70,
                'name' => 'recruit_description_ua',
                'value' => "
                    Наразі PolygoNerds шукає кандидатів на перелічені нижче посади. Якщо ви хочете подати заявку на будь-яку з них і приєднатися до нашої команди, зв'яжіться з нами, надіславши своє портфоліо та резюме на наступну електронну адресу:
                ",
            ],

            [
                'id' => 71,
                'name' => 'recruit_description_ru',
                'value' => "
                    Компания PolygoNerds в настоящее время ищет сотрудников на перечисленные ниже должности. Если вы хотите подать заявку на любую из них и присоединиться к нашей команде, свяжитесь с нами с вашим портфолио и резюме по следующему электронному адресу:
                ",
            ],

            [
                'id' => 72,
                'name' => 'recruit_description_de',
                'value' => "
                    PolygoNerds sucht derzeit nach den unten aufgeführten Stellen. Wenn Sie sich für eine dieser Stellen bewerben und unserem Team beitreten möchten, senden Sie uns Ihr Portfolio und Ihren Lebenslauf an die folgende E-Mail-Adresse:
                ",
            ],

            [
                'id' => 73,
                'name' => 'recruit_email',
                'value' => 'recruit.email@mail.com',
            ],

            [
                'id' => 74,
                'name' => 'field_positions_available_en',
                'value' => 'POSITIONS AVAILABLE',
            ],

            [
                'id' => 75,
                'name' => 'field_positions_available_ua',
                'value' => 'НАЯВНІ ВАКАНСІЇ',
            ],

            [
                'id' => 76,
                'name' => 'field_positions_available_ru',
                'value' => 'ДОСТУПНЫЕ ПОЗИЦИИ',
            ],

            [
                'id' => 77,
                'name' => 'field_positions_available_de',
                'value' => 'FREIE STELLEN',
            ],

            [
                'id' => 78,
                'name' => 'field_job_description_en',
                'value' => 'JOB DESCRIPTION',
            ],

            [
                'id' => 79,
                'name' => 'field_job_description_ua',
                'value' => 'ОПИС ВАКАНСІЇ',
            ],

            [
                'id' => 80,
                'name' => 'field_job_description_ru',
                'value' => 'ОПИСАНИЕ ВАКАНСИИ',
            ],

            [
                'id' => 81,
                'name' => 'field_job_description_de',
                'value' => 'STELLENBESCHREIBUNG',
            ],

            [
                'id' => 82,
                'name' => 'field_employment_status_en',
                'value' => 'STATUS',
            ],

            [
                'id' => 83,
                'name' => 'field_employment_status_ua',
                'value' => 'СТАН',
            ],

            [
                'id' => 84,
                'name' => 'field_employment_status_ru',
                'value' => 'СТАТУС',
            ],

            [
                'id' => 85,
                'name' => 'field_employment_status_de',
                'value' => 'ERWERBSSTATUS',
            ],

            [
                'id' => 86,
                'name' => 'field_recruit_location_en',
                'value' => 'LOCATION',
            ],

            [
                'id' => 87,
                'name' => 'field_recruit_location_ua',
                'value' => 'РОЗТАШУВАННЯ',
            ],

            [
                'id' => 88,
                'name' => 'field_recruit_location_ru',
                'value' => 'РАСПОЛОЖЕНИЕ',
            ],

            [
                'id' => 89,
                'name' => 'field_recruit_location_de',
                'value' => 'LOCATION',
            ],

            [
                'id' => 90,
                'name' => 'field_benefits_en',
                'value' => 'BENEFITS',
            ],

            [
                'id' => 91,
                'name' => 'field_benefits_ua',
                'value' => 'ПЕРЕВАГИ',
            ],

            [
                'id' => 92,
                'name' => 'field_benefits_ru',
                'value' => 'БЕНЕФИТЫ',
            ],

            [
                'id' => 93,
                'name' => 'field_benefits_de',
                'value' => 'BENEFITS',
            ],

            [
                'id' => 94,
                'name' => 'field_workdays_en',
                'value' => 'WORKDAYS',
            ],

            [
                'id' => 95,
                'name' => 'field_workdays_ua',
                'value' => 'РОБОЧІ ДНІ',
            ],

            [
                'id' => 96,
                'name' => 'field_workdays_ru',
                'value' => 'РАБОЧИЕ ДНИ',
            ],

            [
                'id' => 97,
                'name' => 'field_workdays_de',
                'value' => 'ARBEITSTAGE',
            ],

            [
                'id' => 98,
                'name' => 'field_recruiting_process_en',
                'value' => 'RECRUITING PROCESS',
            ],

            [
                'id' => 99,
                'name' => 'field_recruiting_process_ua',
                'value' => 'ПРОЦЕС РЕКРУТИНГУ',
            ],

            [
                'id' => 100,
                'name' => 'field_recruiting_process_ru',
                'value' => 'ПРОЦЕСС РЕКРУТИНГА',
            ],

            [
                'id' => 101,
                'name' => 'field_recruiting_process_de',
                'value' => 'REKRUTIERUNGSPROZESS',
            ],

            [
                'id' => 102,
                'name' => 'field_recruiting_process_1_en',
                'value' => 'application via email',
            ],

            [
                'id' => 103,
                'name' => 'field_recruiting_process_1_ua',
                'value' => 'заявка на email',
            ],

            [
                'id' => 104,
                'name' => 'field_recruiting_process_1_ru',
                'value' => 'заявка на email',
            ],

            [
                'id' => 105,
                'name' => 'field_recruiting_process_1_de',
                'value' => 'bewerbung per email',
            ],

            [
                'id' => 106,
                'name' => 'field_recruiting_process_2_en',
                'value' => 'document selection',
            ],

            [
                'id' => 107,
                'name' => 'field_recruiting_process_2_ua',
                'value' => 'вибір документів',
            ],

            [
                'id' => 108,
                'name' => 'field_recruiting_process_2_ru',
                'value' => 'отбор документов',
            ],

            [
                'id' => 109,
                'name' => 'field_recruiting_process_2_de',
                'value' => 'dokumentenauswahl',
            ],

            [
                'id' => 110,
                'name' => 'field_recruiting_process_3_en',
                'value' => 'first interview',
            ],

            [
                'id' => 111,
                'name' => 'field_recruiting_process_3_ua',
                'value' => 'перша співбесіда',
            ],

            [
                'id' => 112,
                'name' => 'field_recruiting_process_3_ru',
                'value' => 'первое интервью',
            ],

            [
                'id' => 113,
                'name' => 'field_recruiting_process_3_de',
                'value' => 'erstgespräch',
            ],

            [
                'id' => 114,
                'name' => 'field_recruiting_process_4_en',
                'value' => 'final interview',
            ],

            [
                'id' => 115,
                'name' => 'field_recruiting_process_4_ua',
                'value' => 'фінальна співбесіда',
            ],

            [
                'id' => 116,
                'name' => 'field_recruiting_process_4_ru',
                'value' => 'финальное интервью',
            ],

            [
                'id' => 117,
                'name' => 'field_recruiting_process_4_de',
                'value' => 'abschlussgespräch',
            ],

            [
                'id' => 118,
                'name' => 'field_bottom_text_en',
                'value' => 'applicant will be informed regardless of the outcome',
            ],

            [
                'id' => 119,
                'name' => 'field_bottom_text_ua',
                'value' => 'заявник буде проінформований незалежно від результату',
            ],

            [
                'id' => 120,
                'name' => 'field_bottom_text_ru',
                'value' => 'заявитель будет проинформирован независимо от результата',
            ],

            [
                'id' => 121,
                'name' => 'field_bottom_text_de',
                'value' => 'der antragsteller wird unabhängig vom ergebnis informiert.',
            ],

            [
                'id' => 122,
                'name' => 'employment_status_en',
                'value' => 'permanent employee',
            ],

            [
                'id' => 123,
                'name' => 'employment_status_ua',
                'value' => 'постійний працівник',
            ],

            [
                'id' => 124,
                'name' => 'employment_status_ru',
                'value' => 'постоянный сотрудник',
            ],

            [
                'id' => 125,
                'name' => 'employment_status_de',
                'value' => 'festangestellter',
            ],

            [
                'id' => 126,
                'name' => 'recruit_location_en',
                'value' => 'Kharkiv, Ukraine',
            ],

            [
                'id' => 127,
                'name' => 'recruit_location_ua',
                'value' => 'Харків, Україна',
            ],

            [
                'id' => 128,
                'name' => 'recruit_location_ru',
                'value' => 'Харьков, Украина',
            ],

            [
                'id' => 129,
                'name' => 'recruit_location_de',
                'value' => 'Kharkiv, Ukraine',
            ],

            [
                'id' => 130,
                'name' => 'benefits_en',
                'value' => 'transportation fee will be fully covered, bonus (twice: May/November) salary revision (once a year in April), various social insurance complete, internal recruitment for full time employee.',
            ],

            [
                'id' => 131,
                'name' => 'benefits_ua',
                'value' => 'транспортні витрати повністю покриваються, премія (двічі: травень/листопад) перегляд заробітної плати (раз на рік у квітні), повне соціальне страхування, внутрішній набір на повний робочий день.',
            ],

            [
                'id' => 132,
                'name' => 'benefits_ru',
                'value' => 'транспортный сбор будет полностью покрыт, премия (дважды: май/ноябрь) пересмотр заработной платы (раз в год в апреле), различные виды социального страхования, внутренний набор сотрудников на полный рабочий день.',
            ],

            [
                'id' => 133,
                'name' => 'benefits_de',
                'value' => 'Transportkosten werden vollständig übernommen, Prämien (zweimal: Mai/November), Gehaltsanpassung (einmal pro Jahr im April), verschiedene Sozialversicherungen komplett, interne Einstellung von Vollzeitbeschäftigten.',
            ],

            [
                'id' => 134,
                'name' => 'workdays_en',
                'value' => '5 full days off a week, summer holiday, new year holiday, wedding and funeral leave, paid holiday, special holiday',
            ],

            [
                'id' => 135,
                'name' => 'workdays_ua',
                'value' => "5 повних вихідних дні на тиждень, літня відпустка, новорічна відпустка, відпустка у зв'язку з весіллям та похоронами, оплачувана відпустка, спеціальна відпустка",
            ],

            [
                'id' => 136,
                'name' => 'workdays_ru',
                'value' => '5 полных выходных дня в неделю, летний отпуск, новогодний отпуск, отпуск на свадьбу и похороны, оплачиваемый отпуск, специальный отпуск',
            ],

            [
                'id' => 137,
                'name' => 'workdays_de',
                'value' => '5 volle freie Tage pro Woche, Sommerurlaub, Neujahrsurlaub, Hochzeits- und Beerdigungsurlaub, bezahlter Urlaub, Sonderurlaub',
            ],

            // Contact

            [
                'id' => 138,
                'name' => 'contact_us_en',
                'value' => 'CONTACT US',
            ],

            [
                'id' => 139,
                'name' => 'contact_us_ua',
                'value' => 'КОНТАКТИ',
            ],

            [
                'id' => 140,
                'name' => 'contact_us_ru',
                'value' => 'КОНТАКТЫ',
            ],

            [
                'id' => 141,
                'name' => 'contact_us_de',
                'value' => 'KONTAKT',
            ],

            [
                'id' => 142,
                'name' => 'contact_company_name_en',
                'value' => 'PolygoNerds',
            ],

            [
                'id' => 143,
                'name' => 'contact_company_name_ua',
                'value' => 'PolygoNerds',
            ],

            [
                'id' => 144,
                'name' => 'contact_company_name_ru',
                'value' => 'PolygoNerds',
            ],

            [
                'id' => 145,
                'name' => 'contact_company_name_de',
                'value' => 'PolygoNerds',
            ],

            [
                'id' => 146,
                'name' => 'contact_location_en',
                'value' => 'Ukraine, Kharkiv, 66 Chernyshevskaya Street',
            ],

            [
                'id' => 147,
                'name' => 'contact_location_ua',
                'value' => 'Україна, Харків, вулиця Чернишевська, 66',
            ],

            [
                'id' => 148,
                'name' => 'contact_location_ru',
                'value' => 'Украина, Харьков, улица Чернышевского, 66',
            ],

            [
                'id' => 149,
                'name' => 'contact_location_de',
                'value' => 'Ukraine, Charkiv, Tschernyschewskaja-Straße 66',
            ],

            [
                'id' => 150,
                'name' => 'map_link',
                'value' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2564.2737549872563!2d36.23957601571529!3d50.00622397941642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4127a0dc47438cc1%3A0xf22dc050706eb082!2z0LLRg9C70LjRhtGPINCn0LXRgNC90LjRiNC10LLRgdGM0LrQsCwgNjYsINCl0LDRgNC60ZbQsiwg0KXQsNGA0LrRltCy0YHRjNC60LAg0L7QsdC70LDRgdGC0YwsIDYxMDAw!5e0!3m2!1suk!2sua!4v1621517762524!5m2!1suk!2sua',
            ],

            [
                'id' => 151,
                'name' => 'contact_email',
                'value' => 'info@polygonerds.com',
            ],

            [
                'id' => 152,
                'name' => 'contact_email_link',
                'value' => 'mailto:info@polygonerds.com',
            ],

            [
                'id' => 153,
                'name' => 'telegram',
                'value' => 'http://poly.fury-dev.com/?1',
            ],

            [
                'id' => 154,
                'name' => 'artstation',
                'value' => 'http://poly.fury-dev.com/?2',
            ],

            [
                'id' => 155,
                'name' => 'instagram',
                'value' => 'http://poly.fury-dev.com/?3',
            ],

            [
                'id' => 156,
                'name' => 'linkedin',
                'value' => 'http://poly.fury-dev.com/?4',
            ],

            [
                'id' => 157,
                'name' => 'facebook',
                'value' => 'http://poly.fury-dev.com/?5',
            ],

            // Video

            [
                'id' => 158,
                'name' => 'video_mp4',
                'value' => 'video/poly.mp4',
            ],

            [
                'id' => 159,
                'name' => 'video_webm',
                'value' => 'video/poly.webm',
            ],

            [
                'id' => 160,
                'name' => 'bg_image_jpg',
                'value' => 'video/poly.jpg',
            ],

        ]);
    }
}
