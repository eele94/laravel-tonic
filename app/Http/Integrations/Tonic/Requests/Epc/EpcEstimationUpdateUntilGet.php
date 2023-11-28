<?php

namespace App\Http\Integrations\Tonic\Requests\Epc;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * EpcEstimationUpdateUntilGet
 *
 * Get the exact date and time until which the estimation update is currently applied to the revenue of
 * clicks.
 */
class EpcEstimationUpdateUntilGet extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/epc/estimationUpdateUntil";
	}


	public function __construct()
	{
	}
}
