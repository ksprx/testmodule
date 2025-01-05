<?php

namespace App\Core\Traits;

use App\Core\Auth\JWT\JWTGenerator;
use App\Core\Auth\Model\FailedLoginAttempt;
use App\Core\Exceptions\Exception;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

trait AuthenticatableTrait
{
    protected static int $maxAttempts = 5;

    public function login(array $credentials, string $ipAddress): ?string
    {
        if ($this->isAccountLocked()) {
            throw new Exception("حساب کاربری شما به دلیل تلاش‌های ناموفق قفل شده است.");
        }

        if ($this->validateCredentials($credentials['password'])) {
            FailedLoginAttempt::clearForUser($this->id);
            return $this->generateToken();
        } else {
            $this->recordFailedAttempt($ipAddress);
            return null;
        }
    }

    protected function validateCredentials(string $password): bool
    {
        return Hash::check($password, $this->password);
    }

    protected function isAccountLocked(): bool
    {
        return FailedLoginAttempt::countRecentAttempts($this->getAuthIdentifier()) >= 5;
    }

    protected function recordFailedAttempt(): void
    {
        FailedLoginAttempt::create([
            'user_id' => $this->getAuthIdentifier(),
            'attempted_at' => Carbon::now(),
            'ip_address' => $_SERVER['REMOTE_ADDR'],
        ]);
    }

    protected function clearFailedAttempts(): void
    {
        FailedLoginAttempt::clearForUser($this->getAuthIdentifier());
    }

    public function generateToken(): string
    {
        return JWTGenerator::createToken([
            'user_id' => $this->id,
        ]);
    }

    public static function decodeToken(string $token): ?object
    {
        return JWTGenerator::decodeToken($token);
    }

    public static function getAuthenticatedUser(): ?self
    {
        $token = JWTGenerator::getTokenFromRequest();

        if (!$token) {
            return null;
        }

        $payload = self::decodeToken($token);

        if ($payload && isset($payload->user_id)) {
            return self::find($payload->user_id);
        }

        return null;
    }
}
