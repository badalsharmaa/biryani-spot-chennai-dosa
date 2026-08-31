<?php

namespace App\Controllers;

use App\Core\Request;
use App\Core\Response;
use App\Core\View;
use App\Services\SeoService;

abstract class BaseController
{
    protected function render(string $view, array $data = [], string $pageTitle = "", string $metaDesc = "", string $metaImage = ""): void
    {
        $seo = SeoService::generateMeta($pageTitle, $metaDesc, $metaImage);
        $payload = array_merge([
            "pageTitle" => $seo["title"],
            "seo" => $seo,
        ], $data);

        View::render($view, $payload);
    }

    protected function json(mixed $data, int $status = 200): void
    {
        Response::json($data, $status);
    }
}
