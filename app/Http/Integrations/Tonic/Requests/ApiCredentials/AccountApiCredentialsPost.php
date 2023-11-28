<?php

namespace App\Http\Integrations\Tonic\Requests\ApiCredentials;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * AccountApiCredentialsPost
 *
 * Create a new ApiCredential.
 */
class AccountApiCredentialsPost extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/account/apiCredentials";
	}


	public function __construct()
	{
	}
}
