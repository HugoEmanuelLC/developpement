<?php

namespace App\controllers\siteWeb;

use App\controllers\Controller;

class ControllerSw extends Controller
{

    public function homePageSw()
    {   
        return $this->view('siteWeb.layoutSw.homePageSw');
    }

    public function pageSw(int $params)
    {
        return $this->view('siteWeb.layoutSw.pageSw', [$params]);
    }

}