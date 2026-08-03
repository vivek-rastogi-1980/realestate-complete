<?php
declare(strict_types=1);

namespace App\Services;

final class SecurityService
{
    public function csrfToken(): string
    {
        if (session_status() !== PHP_SESSION_ACTIVE) { session_start(); }
        $_SESSION['csrf'] ??= bin2hex(random_bytes(32));
        return $_SESSION['csrf'];
    }

    public function hashPassword(string $password): string
    {
        return password_hash($password, PASSWORD_ARGON2ID);
    }
}
