<?php

namespace AmazonAdvertisingApi;

use Exception;

/**
 * Contains requests' wrappers of Amazon Ads API for Sponsored Brands
 *
 */
trait SponsoredDisplayRequests
{

    /**
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Campaigns/listCampaigns
     * @param array|null $data
     * @return array
     * @throws Exception
     */
    public function listSponsoredDisplayCampaigns(?array $data = null): array
    {
        return $this->operation("sd/campaigns", $data);
    }

    /**
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Campaigns/getCampaign
     * @param int $campaignId
     * @return array
     * @throws Exception
     */
    public function getSponsoredDisplayCampaign(int $campaignId): array
    {
        return $this->operation("sd/campaigns/{$campaignId}");
    }

    /**
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Campaigns/getCampaignResponseEx
     * @param int $campaignId
     * @return array
     * @throws Exception
     */
    public function getSponsoredDisplayCampaignExtended(int $campaignId): array
    {
        return $this->operation("sd/campaigns/extended/{$campaignId}");
    }

    /**
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Campaigns/updateCampaigns
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function updateSponsoredDisplayCampaigns(array $data): array
    {
        return $this->operation("sd/campaigns", $data, 'PUT');
    }

    /**
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Campaigns/createCampaigns
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function createSponsoredDisplayCampaigns(array $data): array
    {
        return $this->operation("sd/campaigns", $data, 'POST');
    }

    /**
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Campaigns/patchCampaigns
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function updatePartialSponsoredDisplayCampaigns(array $data): array
    {
        return $this->operation("sd/campaigns", $data, 'PATCH');
    }

    /**
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Campaigns/archiveCampaign
     * @param int $campaignId
     * @return array
     * @throws Exception
     */
    public function archiveSponsoredDisplayCampaign(int $campaignId): array
    {
        return $this->operation("sd/campaigns/{$campaignId}", [], 'DELETE');
    }

    /**
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Campaigns/listCampaigns
     * @param array|null $data
     * @return array
     * @throws Exception
     */
    public function listSponsoredDisplayCampaignsExtended(?array $data = null): array
    {
        return $this->operation("sd/campaigns/extended", $data);
    }

    /**
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Ad%20groups/listAdGroups
     * @param array|null $data
     * @return array
     * @throws Exception
     */
    public function listSponsoredDisplayAdGroups(?array $data = null): array
    {
        return $this->operation("sd/adGroups", $data);
    }

    /**
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Ad%20groups/getAdGroup
     * @param int $adGroupId
     * @return array
     * @throws Exception
     */
    public function getSponsoredDisplayAdGroup(int $adGroupId): array
    {
        return $this->operation("sd/adGroups/{$adGroupId}");
    }

    /**
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Ad%20groups/getAdGroupResponseEx
     * @param int $adGroupId
     * @return array
     * @throws Exception
     */
    public function getSponsoredDisplayAdGroupExtended(int $adGroupId): array
    {
        return $this->operation("sd/adGroups/extended/{$adGroupId}");
    }

    /**
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Ad%20groups/updateAdGroups
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function updateSponsoredDisplayAdGroups(array $data): array
    {
        return $this->operation("sd/adGroups", $data, 'PUT');
    }

    /**
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Ad%20groups/createAdGroups
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function createSponsoredDisplayAdGroups(array $data): array
    {
        return $this->operation("sd/adGroups", $data, 'POST');
    }

    /**
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Ad%20groups/patchAdGroups
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function updatePartialSponsoredDisplayAdGroups(array $data): array
    {
        return $this->operation("sd/adGroups", $data, 'PATCH');
    }

    /**
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Ad%20groups/archiveAdGroup
     * @param int $adGroupId
     * @return array
     * @throws Exception
     */
    public function archiveSponsoredDisplayAdGroup(int $adGroupId): array
    {
        return $this->operation("sd/adGroups/{$adGroupId}", [], 'DELETE');
    }

    /**
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Ad%20groups/listAdGroupsEx
     * @param array|null $data
     * @return array
     * @throws Exception
     */
    public function listSponsoredDisplayAdGroupsExtended(?array $data = null): array
    {
        return $this->operation("sd/adGroups/extended", $data);
    }

    //----

    /**
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Product%20ads/listProductAds
     * @param array|null $data
     * @return array
     * @throws Exception
     */
    public function listSponsoredDisplayProductAds(?array $data = null): array
    {
        return $this->operation("sd/productAds", $data);
    }

    /**
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Product%20ads/getProductAd
     * @param int $productAdId
     * @return array
     * @throws Exception
     */
    public function getSponsoredDisplayProductAd(int $productAdId): array
    {
        return $this->operation("sd/productAds/{$productAdId}");
    }

    /**
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Product%20ads/getProductAdResponseEx
     * @param int $productAdId
     * @return array
     * @throws Exception
     */
    public function getSponsoredDisplayProductAdExtended(int $productAdId): array
    {
        return $this->operation("sd/productAds/extended/{$productAdId}");
    }

    /**
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Product%20ads/updateProductAds
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function updateSponsoredDisplayProductAds(array $data): array
    {
        return $this->operation("sd/productAds", $data, 'PUT');
    }

    /**
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Product%20ads/createProductAds
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function createSponsoredDisplayProductAds(array $data): array
    {
        return $this->operation("sd/productAds", $data, 'POST');
    }

    /**
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Product%20ads/patchProductAds
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function updatePartialSponsoredDisplayProductAds(array $data): array
    {
        return $this->operation("sd/productAds", $data, 'PATCH');
    }

    /**
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Product%20ads/archiveProductAd
     * @param int $productAdId
     * @return array
     * @throws Exception
     */
    public function archiveSponsoredDisplayProductAd(int $productAdId): array
    {
        return $this->operation("sd/productAds/{$productAdId}", [], 'DELETE');
    }

    /**
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Product%20ads/listProductAdsEx
     * @param array|null $data
     * @return array
     * @throws Exception
     */
    public function listSponsoredDisplayProductAdsExtended(?array $data = null): array
    {
        return $this->operation("sd/productAds/extended", $data);
    }

    // Targets

    /**
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Targeting/listTargetingClauses
     * @param array|null $data
     * @return array
     * @throws Exception
     */
    public function listSponsoredDisplayTargetingClauses(?array $data = null): array
    {
        return $this->operation("sd/targets", $data);
    }

    /**
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Targeting/getTargets
     * @param int $targetId
     * @return array
     * @throws Exception
     */
    public function getSponsoredDisplayTargetingClause(int $targetId): array
    {
        return $this->operation("sd/targets/{$targetId}");
    }

    /**
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Targeting/getTargetsEx
     * @param int $targetId
     * @return array
     * @throws Exception
     */
    public function getSponsoredDisplayTargetingClauseExtended(int $targetId): array
    {
        return $this->operation("sd/targets/extended/{$targetId}");
    }

    /**
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Targeting/updateTargetingClauses
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function updateSponsoredDisplayTargetingClauses(array $data): array
    {
        return $this->operation("sd/targets", $data, 'PUT');
    }

    /**
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Targeting/createTargetingClauses
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function createSponsoredDisplayTargetingClauses(array $data): array
    {
        return $this->operation("sd/targets", $data, 'POST');
    }

    /**
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Targeting/patchTargets
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function updatePartialSponsoredDisplayTargetingClauses(array $data): array
    {
        return $this->operation("sd/targets", $data, 'PATCH');
    }

    /**
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Targeting/archiveTargetingClause
     * @param int $targetId
     * @return array
     * @throws Exception
     */
    public function archiveSponsoredDisplayTargetingClause(int $targetId): array
    {
        return $this->operation("sd/targets/{$targetId}", [], 'DELETE');
    }

    /**
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Targeting/listTargetingClausesEx
     * @param array|null $data
     * @return array
     * @throws Exception
     */
    public function listSponsoredDisplayTargetingClausesExtended(?array $data = null): array
    {
        return $this->operation("sd/targets/extended", $data);
    }

    //Negative Targets

    /**
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Negative%20targeting/listNegativeTargetingClauses
     * @param array|null $data
     * @return array
     * @throws Exception
     */
    public function listSponsoredDisplayNegativeTargetingClauses(?array $data = null): array
    {
        return $this->operation("sd/negativeTargets", $data);
    }

    /**
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Negative%20targeting/getNegativeTargets
     * @param int $negativeTargetId
     * @return array
     * @throws Exception
     */
    public function getSponsoredDisplayNegativeTargetingClause(int $negativeTargetId): array
    {
        return $this->operation("sd/negativeTargets/{$negativeTargetId}");
    }

    /**
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Negative%20targeting/getNegativeTargetsEx
     * @param int $negativeTargetId
     * @return array
     * @throws Exception
     */
    public function getSponsoredDisplayNegativeTargetingClauseExtended(int $negativeTargetId): array
    {
        return $this->operation("sd/negativeTargets/extended/{$negativeTargetId}");
    }

    /**
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Negative%20targeting/updateNegativeTargetingClauses
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function updateSponsoredDisplayNegativeTargetingClauses(array $data): array
    {
        return $this->operation("sd/negativeTargets", $data, 'PUT');
    }

    /**
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Negative%20targeting/createNegativeTargetingClauses
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function createSponsoredDisplayNegativeTargetingClauses(array $data): array
    {
        return $this->operation("sd/negativeTargets", $data, 'POST');
    }

    /**
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Negative%20targeting/patchTargets
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function updatePartialSponsoredDisplayNegativeTargetingClauses(array $data): array
    {
        return $this->operation("sd/negativeTargets", $data, 'PATCH');
    }

    /**
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Negative%20targeting/archiveTargetingClause
     * @param int $negativeTargetId
     * @return array
     * @throws Exception
     */
    public function archiveSponsoredDisplayNegativeTargetingClause(int $negativeTargetId): array
    {
        return $this->operation("sd/negativeTargets/{$negativeTargetId}", [], 'DELETE');
    }

    /**
     * @see https://advertising.amazon.com/API/docs/en-us/sponsored-display/3-0/openapi#/Negative%20targeting/listNegativeTargetingClausesEx
     * @param array|null $data
     * @return array
     * @throws Exception
     */
    public function listSponsoredDisplayNegativeTargetingClausesExtended(?array $data = null): array
    {
        return $this->operation("sd/negativeTargets/extended", $data);
    }
}
