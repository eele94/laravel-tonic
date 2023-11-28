<?php

namespace App\Http\Integrations\Tonic\Requests\Offers;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * OffersGet
 *
 * Get list of offers.
 */
class OffersGet extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/offers";
	}


	public function __construct()
	{
	}
}
