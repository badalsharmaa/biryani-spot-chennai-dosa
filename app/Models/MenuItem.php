<?php

namespace App\Models;

class MenuItem
{
    public function __construct(
        public string $id,
        public string $name,
        public string $category,
        public float $price,
        public string $description = "",
        public string $imageUrl = "",
        public bool $isVegetarian = false,
        public bool $isVegan = false,
        public bool $isGlutenFree = false,
        public bool $isSpicy = false
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            id: $data["id"] ?? "",
            name: $data["name"] ?? $data["title"] ?? "",
            category: $data["category"] ?? "",
            price: (float)($data["price"] ?? 0.0),
            description: $data["description"] ?? "",
            imageUrl: $data["image"] ?? $data["imageUrl"] ?? "",
            isVegetarian: !empty($data["isVegetarian"]) || !empty($data["is_vegetarian"]),
            isVegan: !empty($data["isVegan"]) || !empty($data["is_vegan"]),
            isGlutenFree: !empty($data["isGlutenFree"]) || !empty($data["is_gluten_free"]),
            isSpicy: !empty($data["isSpicy"]) || !empty($data["is_spicy"])
        );
    }
}
