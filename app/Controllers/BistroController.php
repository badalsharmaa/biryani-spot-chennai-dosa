<?php

namespace App\Controllers;

use App\Core\Request;

class BistroController extends BaseController
{
    public function index(Request $request): void
    {
        $this->render("bistro/index", [], "The Bistro", "Casual elevated dining and evening spirits.");
    }
}
