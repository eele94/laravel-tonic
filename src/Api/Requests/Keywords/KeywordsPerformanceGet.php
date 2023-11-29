<?php

namespace Eele94\Tonic\Api\Requests\Keywords;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * KeywordsPerformanceGet
 *
 * Get keyword performance overview for selected time range.<br/>Maximum allowed daterange of 30 days.
 */
class KeywordsPerformanceGet extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/keywords/performance";
	}


	/**
	 * @param string $from Date range from.
	 * @param string $to Date range to.
	 * @param null|string $orderField Order the result by specific field.<br /><i>Available Values</i> : keyword, clicks, rpc, revenue, revenueUsd
	 * @param null|string $orderOrientation The result order direction:<br/>asc - Ascending; from A to Z <br/>desc - Descending; from Z to A
	 * @param null|string $keyword Filter for a specific keyword.
	 * @param null|string $keywordPart Filter for part of a keyword.
	 * @param null|int $campaignIds Filter for a specific campaign with its id<br />Pass multiple values separated by commas.
	 * @param null|string $campaignName Filter for a specific campaign with its name or a part of the name. At least 3 characters required
	 * @param null|string $countryCodes Filter for a specific country<br />Pass multiple values separated by commas.
	 * @param null|int $offerIds Filter for a specific offer with its id<br />Pass multiple values separated by commas.
	 * @param null|string $grouping How to group the data. Default is keyword, which is always applied.<br />Pass multiple values separated by commas.<br /><i>Available Values</i> : keyword, campaignId, countryCode, offerId
	 * @param null|int $offset The offset of returned paginated data
	 */
	public function __construct(
		protected string $from,
		protected string $to,
		protected ?string $orderField = null,
		protected ?string $orderOrientation = null,
		protected ?string $keyword = null,
		protected ?string $keywordPart = null,
		protected ?int $campaignIds = null,
		protected ?string $campaignName = null,
		protected ?string $countryCodes = null,
		protected ?int $offerIds = null,
		protected ?string $grouping = null,
		protected ?int $offset = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'from' => $this->from,
			'to' => $this->to,
			'orderField' => $this->orderField,
			'orderOrientation' => $this->orderOrientation,
			'keyword' => $this->keyword,
			'keywordPart' => $this->keywordPart,
			'campaignIds' => $this->campaignIds,
			'campaignName' => $this->campaignName,
			'countryCodes' => $this->countryCodes,
			'offerIds' => $this->offerIds,
			'grouping' => $this->grouping,
			'offset' => $this->offset,
		]);
	}
}
