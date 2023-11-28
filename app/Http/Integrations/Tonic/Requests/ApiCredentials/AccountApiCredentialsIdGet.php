<?php

namespace App\Http\Integrations\Tonic\Requests\ApiCredentials;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * AccountApiCredentialsIdGet
 *
 * Get data of an ApiCredential by its id.
 */
class AccountApiCredentialsIdGet extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/account/apiCredentials/{$this->id}";
	}


	/**
	 * @param int $id The id of the ApiCredential
	 */
	public function __construct(
		protected int $id,
	) {
	}
}
