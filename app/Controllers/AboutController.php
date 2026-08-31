<?php

namespace App\Controllers;

use App\Core\Request;

class AboutController extends BaseController
{
    public function index(Request $request): void
    {
        $this->render("about/index", [], "About", "Our culinary story, heritage, and ethos.");
    }
}
