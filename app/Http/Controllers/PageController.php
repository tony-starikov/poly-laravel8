<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Page;
use App\Models\Position;
use App\Models\Work;

class PageController extends Controller
{
    public function changeLocale($locale)
    {
        session()->put('locale', $locale);
        app()->setLocale($locale);
        return redirect()->back();
    }

    public function main()
    {
        $page_info = Page::where('name', 'main')->first();

        return view('main', compact('page_info'));
    }

    public function mainApi()
    {
        $data = Page::where('name', 'main')->first()->toArray();
//        $data = Page::where('name', 'main')->fields->get()->toArray();

        $fields = Page::where('name', 'main')->first()->fields->toArray();

        $arr = [];

        foreach ($fields as $v) {
            $arr[$v['name']] = $v['value'];
        }

        $fields = $arr;

        return response()->json(['data'=>$data, 'fields'=>$fields]);
    }

    public function aboutApi()
    {
        $data = Page::where('name', 'about')->first()->toArray();

        $fields = Page::where('name', 'about')->first()->fields->toArray();

        $arr = [];

        foreach ($fields as $v) {
            $arr[$v['name']] = $v['value'];
        }

        $fields = $arr;

        return response()->json(['data'=>$data, 'fields'=>$fields]);
    }

    public function contactApi()
    {
        $data = Page::where('name', 'contact')->first()->toArray();

        $fields = Page::where('name', 'contact')->first()->fields->toArray();

        $arr = [];

        foreach ($fields as $v) {
            $arr[$v['name']] = $v['value'];
        }

        $fields = $arr;

        return response()->json(['data'=>$data, 'fields'=>$fields]);
    }

    public function worksApi()
    {
        $data = Page::where('name', 'works')->first()->toArray();
        $works = Work::get()->toArray();
        return response()->json(['data'=>$data, 'works'=>$works]);
    }

    public function artistsApi()
    {
        $data = Page::where('name', 'artists')->first()->toArray();
        $artists = Artist::get()->toArray();
        return response()->json(['data'=>$data, 'artists'=>$artists]);
    }

    public function recruitApi()
    {
        $data = Page::where('name', 'recruit')->first()->toArray();

        $fields = Page::where('name', 'recruit')->first()->fields->toArray();

        $arr = [];

        foreach ($fields as $v) {
            $arr[$v['name']] = $v['value'];
        }

        $fields = $arr;

        $positions = Position::all()->toArray();

        return response()->json(['data'=>$data, 'positions'=>$positions, 'fields'=>$fields]);
    }

    public function workApi($code)
    {
        $work = Work::where('code', $code)->first()->toArray();
        $works = Page::where('name', 'works')->first()->toArray();
        $files = Work::where('code', $code)->first()->files->toArray();
        $artists = Work::where('code', $code)->first()->artists->toArray();
        $software = Work::where('code', $code)->first()->software->toArray();
        $fields = Page::where('name', 'work')->first()->fields->toArray();

        $arr = [];

        foreach ($fields as $v) {
            $arr[$v['name']] = $v['value'];
        }

        $fields = $arr;

        return response()->json(['work'=>$work, 'works'=>$works, 'artists'=>$artists, 'software'=>$software, 'files'=>$files, 'fields'=>$fields]);
    }

    public function artistApi($code)
    {
        $artist = Artist::where('code', $code)->first()->toArray();
        return response()->json(['artist'=>$artist]);
    }
}
