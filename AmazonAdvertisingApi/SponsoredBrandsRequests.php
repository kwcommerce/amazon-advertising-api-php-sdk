<?php

namespace AmazonAdvertisingApi;

/**
 * Trait SponsoredBrandsRequests
 * Contains requests' wrappers of Amazon Ads API for Sponsored Brands
 */
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
        return $this->operation("sb/adGroups", $data);
    }

    /**
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Campaigns/getAdGroups
     * @param int $adGroupId
     * @return array
     * @throws \Exception
     */
    public function getSponsoredBrandAdGroup(int $adGroupId): array
    {
        return $this->operation("sb/adGroups/{$adGroupId}");
    }

    /**
     * Gets an array of keywords, filtered by optional criteria.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Keywords/listKeywords
     * @param null $data
     * @return array
     * @throws \Exception
     */
    public function listSponsoredBrandKeywords($data = null): array
    {
        return $this->operation("sb/keywords", $data);
    }

    /**
     * Updates one or more keywords.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Keywords/updateKeywords
     * @param array $data
     * @return array
     * @throws \Exception
     */
    public function updateSponsoredBrandKeywords(array $data): array
    {
        return $this->operation("sb/keywords", $data, "PUT");
    }

    /**
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Keywords/createKeywords
     * @param array $data
     * @return array
     * @throws \Exception
     */
    public function createSponsoredBrandKeywords(array $data): array
    {
        return $this->operation("sb/keywords", $data, "POST");
    }

    /**
     * Gets a keyword specified by identifier.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Keywords/getKeyword
     * @param int $keywordId
     * @return array
     * @throws \Exception
     */
    public function getSponsoredBrandKeyword(int $keywordId): array
    {
        return $this->operation("sb/keywords/{$keywordId}");
    }

    /**
     * Archives a keyword specified by identifier.
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-brands/3-0/openapi#/Keywords/archiveKeyword
     * @param int $keywordId
     * @return array
     * @throws \Exception
     */
    public function archiveSponsoredBrandKeyword(int $keywordId): array
    {
        return $this->operation("sb/keywords/{$keywordId}", "DELETE");
    }
}