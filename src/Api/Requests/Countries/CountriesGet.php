<?php

namespace Eele94\Tonic\Api\Requests\Countries;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * CountriesGet
 *
 * Get a list of available countries.
 */
class CountriesGet extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/countries";
	}


	public function __construct()
	{
	}
}
