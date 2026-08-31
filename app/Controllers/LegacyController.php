<?php

namespace App\Controllers;

use App\Core\Request;

class LegacyController extends BaseController
{
    public function index(Request $request): void
    {
        $this->render("legacy/index", [], "The Legacy", "Craft, vision, and culinary heritage.");
    }
}
