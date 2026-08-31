<?php

namespace App\Controllers;

use App\Core\Request;
use App\Repositories\LocationRepository;

class HomeController extends BaseController
{
    public function index(Request $request): void
    {
        $locationRepo = new LocationRepository();
        $this->render("home/index", [
            "locations" => $locationRepo->all(),
        ], "Biryani Spot Chennai Dosa", "Elevated Dining by Ancient Tradition");
    }
}
