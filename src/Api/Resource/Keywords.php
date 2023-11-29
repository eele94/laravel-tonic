<?php

namespace Eele94\Tonic\Api\Resource;

use Eele94\Tonic\Api\Requests\Keywords\KeywordsPerformanceGet;
use Eele94\Tonic\Api\Resource;
use Saloon\Http\Response;

class Keywords extends Resource
{
    /**
     * @param  string  $from Date range from.
     * @param  string  $to Date range to.
     * @param  string  $orderField Order the result by specific field.<br /><i>Available Values</i> : keyword, clicks, rpc, revenue, revenueUsd
     * @param  string  $orderOrientation The result order direction:<br/>asc - Ascending; from A to Z <br/>desc - Descending; from Z to A
     * @param  string  $keyword Filter for a specific keyword.
     * @param  string  $keywordPart Filter for part of a keyword.
     * @param  int  $campaignIds Filter for a specific campaign with its id<br />Pass multiple values separated by commas.
     * @param  string  $campaignName Filter for a specific campaign with its name or a part of the name. At least 3 characters required
     * @param  string  $countryCodes Filter for a specific country<br />Pass multiple values separated by commas.
     * @param  int  $offerIds Filter for a specific offer with its id<br />Pass multiple values separated by commas.
     * @param  string  $grouping How to group the data. Default is keyword, which is always applied.<br />Pass multiple values separated by commas.<br /><i>Available Values</i> : keyword, campaignId, countryCode, offerId
     * @param  int  $offset The offset of returned paginated data
     */
    public function keywordsPerformanceGet(
        string $from,
        string $to,
        ?string $orderField,
        ?string $orderOrientation,
        ?string $keyword,
        ?string $keywordPart,
        ?int $campaignIds,
        ?string $campaignName,
        ?string $countryCodes,
        ?int $offerIds,
        ?string $grouping,
        ?int $offset,
    ): Response {
        return $this->connector->send(new KeywordsPerformanceGet($from, $to, $orderField, $orderOrientation, $keyword, $keywordPart, $campaignIds, $campaignName, $countryCodes, $offerIds, $grouping, $offset));
    }
}
