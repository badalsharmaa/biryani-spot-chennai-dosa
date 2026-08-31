<?php

namespace App\Repositories;

use App\Core\Database;
use App\Models\Reservation;
use App\Models\ContactInquiry;
use PDO;

class LeadRepository
{
    protected PDO $db;

    public function __construct()
    {
        $this->db = Database::getConnection();
        $this->ensureTables();
    }

    protected function ensureTables(): void
    {
        $this->db->exec("
            CREATE TABLE IF NOT EXISTS reservations (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                location TEXT,
                guest_count TEXT,
                date TEXT,
                time TEXT,
                name TEXT,
                email TEXT,
                phone TEXT,
                special_requests TEXT,
                status TEXT DEFAULT 'pending',
                created_at DATETIME DEFAULT CURRENT_TIMESTAMP
            );
            CREATE TABLE IF NOT EXISTS contact_inquiries (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                name TEXT,
                email TEXT,
                phone TEXT,
                location TEXT,
                subject TEXT,
                message TEXT,
                type TEXT DEFAULT 'general',
                created_at DATETIME DEFAULT CURRENT_TIMESTAMP
            );
        ");
    }

    public function saveReservation(Reservation $r): bool
    {
        $stmt = $this->db->prepare("
            INSERT INTO reservations (location, guest_count, date, time, name, email, phone, special_requests)
            VALUES (:location, :guest_count, :date, :time, :name, :email, :phone, :special_requests)
        ");

        return $stmt->execute([
            ":location" => $r->location,
            ":guest_count" => $r->guestCount,
            ":date" => $r->date,
            ":time" => $r->time,
            ":name" => $r->name,
            ":email" => $r->email,
            ":phone" => $r->phone,
            ":special_requests" => $r->specialRequests,
        ]);
    }

    public function saveInquiry(ContactInquiry $inquiry): bool
    {
        $stmt = $this->db->prepare("
            INSERT INTO contact_inquiries (name, email, phone, location, subject, message, type)
            VALUES (:name, :email, :phone, :location, :subject, :message, :type)
        ");

        return $stmt->execute([
            ":name" => $inquiry->name,
            ":email" => $inquiry->email,
            ":phone" => $inquiry->phone,
            ":location" => $inquiry->location,
            ":subject" => $inquiry->subject,
            ":message" => $inquiry->message,
            ":type" => $inquiry->type,
        ]);
    }
}
