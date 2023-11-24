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
        $experience = DB::table('experiences')->get();
        $education = DB::table('educations')->get();
        $client = DB::table('clients')->get();

        return view('home')->with(compact(
            'about',
            'service',
            'experience',
            'education',
            'client'
        ));
    }
}
