<?php

namespace App\Models;

class Reservation
{
    public function __construct(
        public ?int $id = null,
        public string $location = "",
        public string $guestCount = "",
        public string $date = "",
        public string $time = "",
        public string $name = "",
        public string $email = "",
        public string $phone = "",
        public string $specialRequests = "",
        public string $status = "pending",
        public string $createdAt = ""
    ) {}
}
