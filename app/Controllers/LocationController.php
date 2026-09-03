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
        $contactMethod = Validator::sanitize($body["contact_method"] ?? "email");
        $contactValue = Validator::sanitize($body["contact_value"] ?? "");
        
        $email = trim($body["email"] ?? "");
        $phone = Validator::sanitize($body["phone"] ?? "");
        
        if (empty($email) && $contactMethod === "email") {
            $email = $contactValue;
        }
        if (empty($phone) && ($contactMethod === "phone" || $contactMethod === "whatsapp")) {
            $phone = $contactValue;
        }
        
        $location = Validator::sanitize($body["location"] ?? "Bay Area Locations");
        $subject = Validator::sanitize($body["subject"] ?? "Website Contact Inquiry");
        $message = Validator::sanitize($body["message"] ?? "");

        if (empty($name)) {
            $this->json(["success" => false, "error" => "Your name is required."], 400);
            return;
        }

        if (empty($email) && empty($phone)) {
            $this->json(["success" => false, "error" => "Please provide a valid email address or phone number."], 400);
            return;
        }

        if (!empty($email) && !Validator::email($email)) {
            $this->json(["success" => false, "error" => "Please provide a valid email address."], 400);
            return;
        }

        $inquiry = new ContactInquiry(
            name: $name,
            email: $email ?: "inquiry@biryanispotchennaidosa.com",
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
