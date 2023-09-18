<?php

namespace App\Support\ResourceHelper;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

trait EducationResourceHelper
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|Factory|View|Application
     */
    public function education(): Application|View|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('modules.education');
    }
}
