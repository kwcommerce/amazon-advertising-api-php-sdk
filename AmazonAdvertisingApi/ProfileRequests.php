<?php

namespace AmazonAdvertisingApi;

use Exception;

/**
 * Trait ProfileRequests
 * Amazon user-related requests
 */
trait ProfileRequests
{

    /**
     * Get amazon user data (user_id,email)
     * @see https://developer.amazon.com/docs/login-with-amazon/obtain-customer-profile.html
     * @return array
     */
    public function getUserProfile(): array
    {
        $this->endpoint = 'https://api.amazon.com';
        return $this->operation("user/profile");
    }
}
