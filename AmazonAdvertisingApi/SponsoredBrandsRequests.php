<?php


namespace AmazonAdvertisingApi;


trait SponsoredBrandsRequests
{
    /**
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Campaigns/listAdGroups
     * @param null $data
     * @return array
     * @throws \Exception
     */
    public function listSponsoredBrandAdGroups($data = null): array
    {
        return $this->_operation("sb/adGroups", $data);
    }

    /**
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Campaigns/getAdGroups
     * @param int $adGroupId
     * @return array
     * @throws \Exception
     */
    public function getSponsoredBrandAdGroup(int $adGroupId): array
    {
        return $this->_operation("sb/adGroups/{$adGroupId}");
    }
}