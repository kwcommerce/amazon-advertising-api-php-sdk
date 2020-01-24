<?php


namespace AmazonAdvertisingApi;


trait ProfilesRequests
{
    /**
     * Retrieve all profiles associated with the auth token.
     * @return array
     * @throws \Exception
     */
    public function listProfiles()
    {
        return $this->_operation("profiles");
    }

    /**
     * Retrieve a profile by ID
     * @param $profileId
     * @return array
     * @throws \Exception
     */
    public function getProfile($profileId)
    {
        return $this->_operation("profiles/{$profileId}");
    }

    /**
     * @param $data
     * @return array
     * @throws \Exception
     */
    public function updateProfiles($data)
    {
        return $this->_operation("profiles", $data, "PUT");
    }

    /**
     * Register profile. Sandbox only
     * @param $data
     * @return array
     * @throws \Exception
     */
    public function registerProfile($data)
    {
        return $this->_operation("profiles/register", $data, "PUT");
    }

    /**
     * @param $profileId
     * @return array
     * @throws \Exception
     */
    public function registerProfileStatus($profileId)
    {
        return $this->_operation("profiles/register/{$profileId}/status");
    }

    /**
     * Register brand. Sandbox only.
     * @see https://advertising.amazon.com/API/docs/en-us/reference/2/profiles
     * @param array $data
     * @return array
     * @throws \Exception
     */
    public function registerBrand(array $data): array
    {
        return $this->_operation("profiles/registerBrand", $data, "PUT");
    }
}