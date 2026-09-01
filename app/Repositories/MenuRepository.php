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

            foreach ($data as $catGroup) {
                if (isset($catGroup["category"]) && isset($catGroup["items"]) && is_array($catGroup["items"])) {
                    $catName = trim($catGroup["category"]);
                    foreach ($catGroup["items"] as $it) {
                        $it["category"] = $catName;
                        if (empty($it["imageUrl"]) && empty($it["image"])) {
                            $it["imageUrl"] = $this->resolveDishImage($it["title"] ?? $it["name"] ?? "", $catName);
                        }
                        $items[] = MenuItem::fromArray($it);
                    }
                } elseif (isset($catGroup["name"]) || isset($catGroup["title"])) {
                    if (empty($catGroup["imageUrl"]) && empty($catGroup["image"])) {
                        $catGroup["imageUrl"] = $this->resolveDishImage($catGroup["title"] ?? $catGroup["name"] ?? "", $catGroup["category"] ?? "");
                    }
                    $items[] = MenuItem::fromArray($catGroup);
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

    public function getParentGroup(string $category): string
    {
        $c = strtolower(trim($category));
        if (str_contains($c, 'biryani') || str_contains($c, 'family pack') || str_contains($c, 'family size')) {
            return 'biryanis';
        }
        if (str_contains($c, 'dosa') || str_contains($c, 'idly') || str_contains($c, 'uttapam')) {
            return 'dosas';
        }
        if (str_contains($c, 'appetizer') || str_contains($c, 'starter') || str_contains($c, 'indo')) {
            return 'appetizers';
        }
        if (str_contains($c, 'curry') || str_contains($c, 'entree') || str_contains($c, 'sapadu') || str_contains($c, 'special')) {
            return 'curries';
        }
        if (str_contains($c, 'bread') || str_contains($c, 'naan') || str_contains($c, 'parotta') || str_contains($c, 'parota') || str_contains($c, 'roti') || str_contains($c, 'chapati')) {
            return 'breads';
        }
        if (str_contains($c, 'thali') || str_contains($c, 'buffet')) {
            return 'thalis';
        }
        if (str_contains($c, 'dessert') || str_contains($c, 'beverage') || str_contains($c, 'soup') || str_contains($c, 'alcohol')) {
            return 'beverages';
        }
        return 'other';
    }

    private function resolveDishImage(string $name, string $category): string
    {
        $n = strtolower($name);
        $c = strtolower($category);

        // Curated luxury stock food photography library (DSCF series)
        $stockImages = [
            'biryani' => [
                '/assets/images/DSCF1644-1024x1024.webp',
                '/assets/images/DSCF1672-1024x1024.webp',
                '/assets/images/DSCF1602-1024x1024.webp',
                '/assets/images/DSCF1657-1024x1024.webp',
            ],
            'dosa' => [
                '/assets/images/DSCF1420-1024x1024.webp',
                '/assets/images/DSCF1541-1024x1024.webp',
                '/assets/images/DSCF1511-1024x1024.webp',
                '/assets/images/DSCF1519-1024x1024.webp',
            ],
            'appetizer' => [
                '/assets/images/DSCF1845-1024x1024.webp',
                '/assets/images/DSCF1425-1024x1024.webp',
                '/assets/images/DSCF1593-1024x1024.webp',
                '/assets/images/DSCF1838-1024x1024.webp',
                '/assets/images/DSCF1599-1024x1024.webp',
            ],
            'curry' => [
                '/assets/images/DSCF1676-1024x1024.webp',
                '/assets/images/DSCF1744-1024x1024.webp',
                '/assets/images/DSCF1713-1024x1024.webp',
                '/assets/images/DSCF1618-1024x1024.webp',
                '/assets/images/DSCF1755-1024x1024.webp',
            ],
            'bread' => [
                '/assets/images/DSCF1581-1024x1024.webp',
                '/assets/images/DSCF1541-1024x1024.webp',
                '/assets/images/DSCF1420-1024x1024.webp',
            ],
            'dessert' => [
                '/assets/images/DSCF1849-1024x1024.webp',
                '/assets/images/DSCF1863-1024x1024.webp',
                '/assets/images/DSCF1880-1024x1024.webp',
                '/assets/images/DSCF1452-1024x1024.webp',
                '/assets/images/DSCF1611-1024x1024.webp',
            ]
        ];

        // Deterministic hash based on dish name
        $hash = crc32($name);

        if (str_contains($n, 'biryani') || str_contains($c, 'biryani') || str_contains($n, 'rice') || str_contains($n, 'pulao')) {
            $pool = $stockImages['biryani'];
            return $pool[abs($hash) % count($pool)];
        }
        if (str_contains($n, 'dosa') || str_contains($c, 'dosa') || str_contains($n, 'idli') || str_contains($n, 'idly') || str_contains($n, 'vada') || str_contains($n, 'uttapam')) {
            $pool = $stockImages['dosa'];
            return $pool[abs($hash) % count($pool)];
        }
        if (str_contains($n, '65') || str_contains($n, 'fry') || str_contains($n, 'appetizer') || str_contains($n, 'tikka') || str_contains($n, 'kabab') || str_contains($n, 'samosa') || str_contains($n, 'starter') || str_contains($c, 'appetizer')) {
            $pool = $stockImages['appetizer'];
            return $pool[abs($hash) % count($pool)];
        }
        if (str_contains($n, 'curry') || str_contains($n, 'masala') || str_contains($n, 'korma') || str_contains($n, 'dal') || str_contains($n, 'paneer') || str_contains($n, 'gravy') || str_contains($c, 'curry') || str_contains($c, 'entree')) {
            $pool = $stockImages['curry'];
            return $pool[abs($hash) % count($pool)];
        }
        if (str_contains($n, 'naan') || str_contains($n, 'roti') || str_contains($n, 'parotta') || str_contains($n, 'parota') || str_contains($n, 'bread') || str_contains($c, 'bread')) {
            $pool = $stockImages['bread'];
            return $pool[abs($hash) % count($pool)];
        }
        if (str_contains($n, 'dessert') || str_contains($n, 'jamun') || str_contains($n, 'halwa') || str_contains($n, 'sweet') || str_contains($n, 'drink') || str_contains($n, 'lassi') || str_contains($n, 'coffee') || str_contains($c, 'dessert') || str_contains($c, 'beverage')) {
            $pool = $stockImages['dessert'];
            return $pool[abs($hash) % count($pool)];
        }

        // Generic fallback to all stock images
        $all = array_merge(...array_values($stockImages));
        return $all[abs($hash) % count($all)];
    }
}


