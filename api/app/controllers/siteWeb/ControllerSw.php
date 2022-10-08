<?php

namespace App\controllers\siteWeb;

use App\controllers\Controller;

class ControllerSw extends Controller
{

    public function homePageSw()
    {   
        return $this->view('siteWeb.layoutSw.homePageSw');
    }

    public function produitsMenu(int $params)
    {
        return $this->view('siteWeb.layoutSw.produitsMenu', [$params]);
    }

    public function facebook()
    {
        return $this->view('siteWeb.layoutSw.facebook');
    }

}