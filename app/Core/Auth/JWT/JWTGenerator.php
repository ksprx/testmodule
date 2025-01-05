<?php

namespace App\Core\Auth\JWT;

use Exception;
use Firebase\JWT\ExpiredException;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Firebase\JWT\SignatureInvalidException;

class JWTGenerator
{
    /**
     * Generate a JWT token for a user with secure claims.
     */
    public static function createToken(array $payload): string
    {
        $payload = array_merge($payload, [
            'iss' => env('APP_URL'),
            'iat' => time(),
            'exp' => time() + self::getExpiryTime(),
            'nbf' => time(),
            'jti' => bin2hex(random_bytes(16))
        ]);

        return JWT::encode($payload, self::getSecretKey(), 'HS256');
    }

    protected static function getExpiryTime(): int
    {
        return (int)(env('JWT_EXPIRY_TIME') ?? 3600);
    }

    /**
     * Retrieve the secret key securely from environment variables.
     */
    protected static function getSecretKey(): string
    {
        return env('JWT_SECRET') ?? throw new Exception('JWT secret key not set.');
    }

    /**
     * Decode and validate a JWT token.
     */
    public static function decodeToken(string $token): ?object
    {
        try {
            return JWT::decode($token, new Key(self::getSecretKey(), 'HS256'));
        } catch (ExpiredException $e) {
            // Handle token expiration
            throw new Exception('Token has expired.');
        } catch (SignatureInvalidException $e) {
            // Handle invalid signature
            throw new Exception('Token signature is invalid.');
        } catch (Exception $e) {
            // Handle any other decoding errors
            return null;
        }
    }

    /**
     * Retrieve JWT token from the Authorization header.
     */
    public static function getTokenFromRequest(): ?string
    {
        $authHeader = $_SERVER['HTTP_AUTHORIZATION'] ?? '';
        if (str_starts_with($authHeader, 'Bearer ')) {
            return substr($authHeader, 7);
        }
        return null;
    }
}
