<?php

namespace App\Services;

use App\Models\Reservation;
use App\Repositories\LeadRepository;
use App\Helpers\Validator;

class ReservationService
{
    protected LeadRepository $leadRepo;

    public function __construct(?LeadRepository $repo = null)
    {
        $this->leadRepo = $repo ?: new LeadRepository();
    }

    public function createReservation(array $data): array
    {
        $name = Validator::sanitize($data["name"] ?? "");
        $email = trim($data["email"] ?? "");
        $phone = Validator::sanitize($data["phone"] ?? "");
        $location = Validator::sanitize($data["location"] ?? "");
        $date = Validator::sanitize($data["date"] ?? "");
        $time = Validator::sanitize($data["time"] ?? "");
        $guests = Validator::sanitize($data["guests"] ?? $data["guest_count"] ?? "");
        $notes = Validator::sanitize($data["notes"] ?? $data["special_requests"] ?? "");

        if (empty($name)) {
            return ["success" => false, "error" => "Name is required."];
        }
        if (!Validator::email($email)) {
            return ["success" => false, "error" => "Valid email address is required."];
        }
        if (empty($phone)) {
            return ["success" => false, "error" => "Phone number is required."];
        }

        $reservation = new Reservation(
            location: $location,
            guestCount: $guests,
            date: $date,
            time: $time,
            name: $name,
            email: $email,
            phone: $phone,
            specialRequests: $notes
        );

        $saved = $this->leadRepo->saveReservation($reservation);
        return [
            "success" => $saved,
            "message" => $saved ? "Reservation confirmed. We look forward to welcoming you." : "Unable to save reservation at this time."
        ];
    }
}
