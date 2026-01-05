<?php

namespace App;

enum UserRole: string
{
    case ADMIN = 'admin';
    case SUPER_ADMIN = 'super_admin';
    case SERVICE = 'service';
    case BOOKING = 'booking';
    case USER = 'user';

    public function label(): string
    {
        return match ($this) {
            UserRole::ADMIN => 'Administrator',
            UserRole::SUPER_ADMIN => 'Super Administrator',
            UserRole::SERVICE => 'Service',
            UserRole::BOOKING => 'Booking',
            UserRole::USER => 'User',
        };
    }
}
