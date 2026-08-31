<?php

namespace App\Controllers;

use App\Core\Request;
use App\Repositories\LocationRepository;
use App\Repositories\LeadRepository;
use App\Models\ContactInquiry;
use App\Helpers\Validator;

class LocationController extends BaseController
{
    public function index(Request $request): void
    {
        $locationRepo = new LocationRepository();
        $this->render("locations/index", [
            "locations" => $locationRepo->all(),
        ], "Contact & Locations", "Find our locations across Dublin, Milpitas, Livermore, and Concord.");
    }

    public function submitInquiry(Request $request): void
    {
        $body = $request->getBody();
        $name = Validator::sanitize($body["name"] ?? "");
        $email = trim($body["email"] ?? "");
        $phone = Validator::sanitize($body["phone"] ?? "");
        $location = Validator::sanitize($body["location"] ?? "");
        $subject = Validator::sanitize($body["subject"] ?? "");
        $message = Validator::sanitize($body["message"] ?? "");

        if (empty($name) || !Validator::email($email)) {
            $this->json(["success" => false, "error" => "Name and valid email required."], 400);
            return;
        }

        $inquiry = new ContactInquiry(
            name: $name,
            email: $email,
            phone: $phone,
            location: $location,
            subject: $subject,
            message: $message
        );

        $repo = new LeadRepository();
        $saved = $repo->saveInquiry($inquiry);

        $this->json([
            "success" => $saved,
            "message" => $saved ? "Your message has been received. Our team will contact you shortly." : "Unable to save inquiry."
        ], $saved ? 200 : 500);
    }
}
