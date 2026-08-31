<?php

namespace App\Controllers;

use App\Core\Request;

class GalleryController extends BaseController
{
    public function index(Request $request): void
    {
        $this->render("gallery/index", [], "Gallery", "A visual showcase of our artisanal culinary creations.");
    }
}
