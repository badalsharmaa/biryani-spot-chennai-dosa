<?php

namespace App\Models;

class Location
{
    public function __construct(
        public string $id,
        public string $name,
        public string $shortName,
        public string $address,
        public string $city,
        public string $state,
        public string $zip,
        public string $phone,
        public string $hours,
        public string $orderUrl,
        public bool $isPrimary = false
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            id: $data["id"] ?? "",
            name: $data["name"] ?? "",
            shortName: $data["short_name"] ?? "",
            address: $data["address"] ?? "",
            city: $data["city"] ?? "",
            state: $data["state"] ?? "",
            zip: $data["zip"] ?? "",
            phone: $data["phone"] ?? "",
            hours: $data["hours"] ?? "",
            orderUrl: $data["order_url"] ?? "",
            isPrimary: !empty($data["is_primary"])
        );
    }
}
