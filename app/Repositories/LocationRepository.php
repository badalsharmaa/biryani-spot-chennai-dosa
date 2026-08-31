<?php

namespace App\Repositories;

use App\Core\App;
use App\Models\Location;

class LocationRepository
{
    private static ?array $cached = null;

    public function all(): array
    {
        if (self::$cached !== null) {
            return self::$cached;
        }

        $configLocations = App::config("locations", []);
        $locations = [];
        foreach ($configLocations as $loc) {
            $locations[$loc["id"]] = Location::fromArray($loc);
        }

        self::$cached = $locations;
        return $locations;
    }

    public function find(string $id): ?Location
    {
        $all = $this->all();
        return $all[$id] ?? null;
    }

    public function getPrimary(): ?Location
    {
        foreach ($this->all() as $loc) {
            if ($loc->isPrimary) return $loc;
        }
        $all = $this->all();
        return reset($all) ?: null;
    }
}
