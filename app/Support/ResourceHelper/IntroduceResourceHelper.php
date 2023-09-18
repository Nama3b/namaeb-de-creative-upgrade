<?php

namespace App\Support\ResourceHelper;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

trait IntroduceResourceHelper
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|Factory|View|Application
     */
    public function introduce(): Application|View|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('modules.introduce');
    }
}
