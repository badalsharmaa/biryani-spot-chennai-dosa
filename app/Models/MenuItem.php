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
        public array $availableLocations = [],
        public array $locationPrices = [],
        public bool $isVegetarian = false,
        public bool $isVegan = false,
        public bool $isGlutenFree = false,
        public bool $isSpicy = false
    ) {}

    public static function fromArray(array $data): self
    {
        $rawPrice = $data["price"] ?? 0.0;
        $price = is_numeric($rawPrice) ? (float)$rawPrice : (float)preg_replace('/[^0-9.]/', '', (string)$rawPrice);

        return new self(
            id: $data["id"] ?? uniqid("item_"),
            name: $data["name"] ?? $data["title"] ?? "Signature Dish",
            category: $data["category"] ?? "Specialities",
            price: $price,
            description: $data["description"] ?? "",
            imageUrl: $data["image"] ?? $data["imageUrl"] ?? "",
            availableLocations: $data["availableLocations"] ?? ["Dublin", "Milpitas", "Livermore", "Concord"],
            locationPrices: $data["locationPrices"] ?? [],
            isVegetarian: !empty($data["isVegetarian"]) || !empty($data["is_vegetarian"]),
            isVegan: !empty($data["isVegan"]) || !empty($data["is_vegan"]),
            isGlutenFree: !empty($data["isGlutenFree"]) || !empty($data["is_gluten_free"]),
            isSpicy: !empty($data["isSpicy"]) || !empty($data["is_spicy"])
        );
    }
}

