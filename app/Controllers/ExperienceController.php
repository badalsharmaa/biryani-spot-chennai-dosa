<?php

namespace App\Controllers;

use App\Core\Request;

class ExperienceController extends BaseController
{
    public function index(Request $request): void
    {
        $this->render("experience/index", [], "The Experience", "Where the setting becomes part of the table.");
    }
}
