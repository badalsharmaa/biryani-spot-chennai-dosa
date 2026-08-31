<?php

namespace App\Controllers;

use App\Core\Request;
use App\Services\MenuService;

class MenuController extends BaseController
{
    protected MenuService $menuService;

    public function __construct()
    {
        $this->menuService = new MenuService();
    }

    public function index(Request $request): void
    {
        $this->render("menu/index", [
            "categories" => $this->menuService->getCategories(),
            "items" => $this->menuService->getUnifiedMenu(),
        ], "The Menu", "Explore our culinary repertoire of authentic Dum Biryanis and artisanal Dosas.");
    }

    public function api(Request $request): void
    {
        $cat = $request->getQuery("category");
        if ($cat) {
            $items = $this->menuService->getMenuByCategory($cat);
        } else {
            $items = $this->menuService->getUnifiedMenu();
        }

        $this->json([
            "status" => "success",
            "count" => count($items),
            "data" => array_values($items)
        ]);
    }
}
