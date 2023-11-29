<?php

namespace Eele94\Tonic\Api\Requests\ApiCredentials;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * AccountApiCredentialsIdDelete
 *
 * Delete an ApiCredential by its id.
 */
class AccountApiCredentialsIdDelete extends Request
{
	protected Method $method = Method::DELETE;


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
