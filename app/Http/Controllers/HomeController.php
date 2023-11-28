<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * @return View|Application|Factory|\Illuminate\Contracts\Foundation\Application
     */
    public function index(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $about = DB::table('abouts')->first();
        $service = DB::table('services')->limit(6)->get();
        $experience = DB::table('experiences')->limit(6)->get();
        $education = DB::table('educations')->limit(4)->get();
        $client = DB::table('clients')->limit(10)->get();

        return view('home')->with(compact(
            'about',
            'service',
            'experience',
            'education',
            'client'
        ));
    }

    /**
     * @return Factory|Application|View|\Illuminate\Contracts\Foundation\Application
     */
    public function indexUpgrade(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        $about = DB::table('abouts')->first();
        $service = DB::table('services')->limit(6)->get();
        $experience = DB::table('experiences')->limit(6)->get();
        $education = DB::table('educations')->limit(4)->get();
        $client = DB::table('clients')->limit(10)->get();

        return view('home-upgrade')->with(compact(
            'about',
            'service',
            'experience',
            'education',
            'client'
        ));
    }
}
