<?php

namespace App\Models;

class ContactInquiry
{
    public function __construct(
        public ?int $id = null,
        public string $name = "",
        public string $email = "",
        public string $phone = "",
        public string $location = "",
        public string $subject = "",
        public string $message = "",
        public string $type = "general", // "general", "catering", "private_dining"
        public string $createdAt = ""
    ) {}
}
