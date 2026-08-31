<?php

namespace App\Services;

use App\Repositories\MenuRepository;

class MenuService
{
    protected MenuRepository $menuRepo;

    public function __construct(?MenuRepository $repo = null)
    {
        $this->menuRepo = $repo ?: new MenuRepository();
    }

    public function getUnifiedMenu(): array
    {
        return $this->menuRepo->all();
    }

    public function getCategories(): array
    {
        return $this->menuRepo->getCategories();
    }

    public function getMenuByCategory(string $category): array
    {
        return $this->menuRepo->filterByCategory($category);
    }
}
