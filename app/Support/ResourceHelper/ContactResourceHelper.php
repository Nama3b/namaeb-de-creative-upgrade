<?php

namespace App\Support\ResourceHelper;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

trait ContactResourceHelper
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|Factory|View|Application
     */
    public function contact(): Application|View|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('modules.contact');
    }

}
