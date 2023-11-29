<?php

namespace Eele94\Tonic\Api\Requests\ApiCredentials;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * AccountApiCredentialsGet
 *
 * Get list of all ApiCredentials. The list also includes expired ApiCredentials.
 */
class AccountApiCredentialsGet extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/account/apiCredentials";
	}


	public function __construct()
	{
	}
}
