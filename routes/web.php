<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ArtistController;
use App\Http\Controllers\Admin\FileController;
use App\Http\Controllers\Admin\LocaleFileController;
use App\Http\Controllers\Admin\PositionController;
use App\Http\Controllers\Admin\SoftwareController;
use App\Http\Controllers\Admin\WorkController;
use App\Http\Controllers\Admin\AdminPageController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::group([
    'middleware' => 'set_locale',
], function () {

    Auth::routes([
        'reset' => false,
        'confirm' => false,
        'verify' => false,
        'register' => false,
    ]);

    Route::get('locale/{locale}', [PageController::class, 'changeLocale'])->name('locale');

    Route::get('/', [PageController::class, 'main'])->name('main');

    Route::get('/works', [PageController::class, 'main'])->name('works');
    Route::get('/work/{code}', [PageController::class, 'main'])->name('work');

    Route::get('/artists', [PageController::class, 'main'])->name('artists');
    Route::get('/artist/{code}', [PageController::class, 'main'])->name('artist');

    Route::get('/about', [PageController::class, 'main'])->name('about');

    Route::get('/recruit', [PageController::class, 'main'])->name('recruit');

    Route::get('/contact', [PageController::class, 'main'])->name('contact');
});

Route::group([
    'middleware' => 'auth',
    'prefix' => 'admin',
], function () {
    Route::group(['middleware' => 'is_admin'], function () {
        Route::get('', [AdminController::class, 'index'])->name('admin');

        Route::post('/change_password',[AdminController::class, 'changePassword'])->name('admin.change.password');
        Route::post('/change_email',[AdminController::class, 'changeEmail'])->name('admin.change.email');

        Route::get('file/{id}', [FileController::class, 'main'])->name('files.main');

        Route::get('menu/en', [LocaleFileController::class, 'readEn'])->name('menu.en.settings');
        Route::post('menu/edit/en', [LocaleFileController::class, 'menuEnEdit'])->name('menu.en.edit');

        Route::get('menu/ua', [LocaleFileController::class, 'readUa'])->name('menu.ua.settings');
        Route::post('menu/edit/ua', [LocaleFileController::class, 'menuUaEdit'])->name('menu.ua.edit');

        Route::get('menu/ru', [LocaleFileController::class, 'readRu'])->name('menu.ru.settings');
        Route::post('menu/edit/ru', [LocaleFileController::class, 'menuRuEdit'])->name('menu.ru.edit');

        Route::get('menu/de', [LocaleFileController::class, 'readDe'])->name('menu.de.settings');
        Route::post('menu/edit/de', [LocaleFileController::class, 'menuDeEdit'])->name('menu.de.edit');


        Route::group(['prefix' => 'page'], function () {
            Route::get('main', [AdminPageController::class, 'main'])->name('admin.main.page');
            Route::post('main/edit', [AdminPageController::class, 'mainEdit'])->name('admin.main.page.edit');

            Route::get('works', [AdminPageController::class, 'works'])->name('admin.works.page');
            Route::post('works/edit', [AdminPageController::class, 'worksEdit'])->name('admin.works.page.edit');

            Route::get('artists', [AdminPageController::class, 'artists'])->name('admin.artists.page');
            Route::post('artists/edit', [AdminPageController::class, 'artistsEdit'])->name('admin.artists.page.edit');

            Route::get('about', [AdminPageController::class, 'about'])->name('admin.about.page');
            Route::post('about/edit', [AdminPageController::class, 'aboutEdit'])->name('admin.about.page.edit');

            Route::get('recruit', [AdminPageController::class, 'recruit'])->name('admin.recruit.page');
            Route::post('recruit/edit', [AdminPageController::class, 'recruitEdit'])->name('admin.recruit.page.edit');

            Route::get('contact', [AdminPageController::class, 'contact'])->name('admin.contact.page');
            Route::post('contact/edit', [AdminPageController::class, 'contactEdit'])->name('admin.contact.page.edit');

            Route::get('video', [AdminPageController::class, 'bgVideo'])->name('admin.video.page');
            Route::post('video/edit', [AdminPageController::class, 'bgVideoEdit'])->name('admin.video.page.edit');
        });

        Route::resource('software', SoftwareController::class);
        Route::resource('positions', PositionController::class);
        Route::resource('artists', ArtistController::class);
        Route::resource('works', WorkController::class);
        Route::resource('files', FileController::class);
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
