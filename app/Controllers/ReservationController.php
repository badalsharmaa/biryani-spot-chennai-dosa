<?php

namespace App\Controllers;

use App\Core\Request;
use App\Services\ReservationService;
use App\Repositories\LocationRepository;

class ReservationController extends BaseController
{
    protected ReservationService $resService;

    public function __construct()
    {
        $this->resService = new ReservationService();
    }

    public function index(Request $request): void
    {
        $locationRepo = new LocationRepository();
        $this->render("reservations/index", [
            "locations" => $locationRepo->all(),
        ], "Reservations & FAQ", "Reserve your table at Biryani Spot Chennai Dosa.");
    }

    public function store(Request $request): void
    {
        $result = $this->resService->createReservation($request->getBody());
        $this->json($result, $result["success"] ? 200 : 400);
    }
}
