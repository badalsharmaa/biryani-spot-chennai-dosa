<?php

namespace App\Repositories;

use App\Models\MenuItem;

class MenuRepository
{
    private static ?array $cachedItems = null;

    public function all(): array
    {
        if (self::$cachedItems !== null) {
            return self::$cachedItems;
        }

        $jsonPath = dirname(__DIR__, 2) . "/old_website_data/data/unified_menu.json";
        $items = [];

        if (file_exists($jsonPath)) {
            $raw = file_get_contents($jsonPath);
            $data = json_decode($raw, true) ?: [];

            // If nested structure with categories
            if (isset($data["categories"]) && is_array($data["categories"])) {
                foreach ($data["categories"] as $cat) {
                    $catName = $cat["name"] ?? "Specialities";
                    foreach ($cat["items"] ?? [] as $it) {
                        $it["category"] = $catName;
                        $items[] = MenuItem::fromArray($it);
                    }
                }
            } elseif (is_array($data)) {
                foreach ($data as $it) {
                    $items[] = MenuItem::fromArray($it);
                }
            }
        }

        self::$cachedItems = $items;
        return $items;
    }

    public function getCategories(): array
    {
        $categories = [];
        foreach ($this->all() as $item) {
            if (!empty($item->category)) {
                $categories[$item->category] = ($categories[$item->category] ?? 0) + 1;
            }
        }
        return array_keys($categories);
    }

    public function filterByCategory(string $category): array
    {
        return array_filter($this->all(), fn(MenuItem $item) => 
            strcasecmp($item->category, $category) === 0
        );
    }
}
