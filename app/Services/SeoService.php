<?php

namespace App\Services;

use App\Core\App;

class SeoService
{
    public static function generateMeta(string $pageTitle, string $description = "", string $image = ""): array
    {
        $defaultTitle = App::config("seo.default_title");
        $titleSuffix = App::config("seo.title_suffix");
        $defaultDesc = App::config("seo.description");
        $defaultImage = App::config("seo.og_image");
        $appUrl = App::config("app.url");

        $fullTitle = $pageTitle ? ($pageTitle . $titleSuffix) : $defaultTitle;
        $finalDesc = $description ?: $defaultDesc;
        $finalImage = $image ? (str_starts_with($image, "http") ? $image : $appUrl . "/" . ltrim($image, "/")) : ($appUrl . $defaultImage);

        return [
            "title" => $fullTitle,
            "description" => $finalDesc,
            "image" => $finalImage,
            "schema_json" => self::generateRestaurantSchema()
        ];
    }

    public static function generateRestaurantSchema(): string
    {
        $locations = App::config("locations", []);
        $dublin = $locations["dublin"] ?? [];

        $schema = [
            "@context" => "https://schema.org",
            "@type" => "Restaurant",
            "name" => "Biryani Spot Chennai Dosa",
            "image" => "https://biryanispotchennaidosa.com/assets/images/Food-at-the-Pyramids.webp",
            "servesCuisine" => ["South Indian", "Hyderabadi", "North Indian", "Tandoori"],
            "priceRange" => "$$",
            "address" => [
                "@type" => "PostalAddress",
                "streetAddress" => $dublin["address"] ?? "4288 Dublin Blvd #111",
                "addressLocality" => $dublin["city"] ?? "Dublin",
                "addressRegion" => $dublin["state"] ?? "CA",
                "postalCode" => $dublin["zip"] ?? "94568",
                "addressCountry" => "US"
            ],
            "telephone" => $dublin["phone"] ?? "(925) 361-5317"
        ];

        return json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
    }
}
