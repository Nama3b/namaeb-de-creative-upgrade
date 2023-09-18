<?php

namespace App\Support\ResourceHelper;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

trait HomeMainResourceHelper
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|Factory|View|Application
     */
    public function homeMain(): Application|View|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('modules.home-main');
    }
}
