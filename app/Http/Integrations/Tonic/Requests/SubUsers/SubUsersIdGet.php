<?php

namespace App\Http\Integrations\Tonic\Requests\SubUsers;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * SubUsersIdGet
 *
 * Get data of a subUser by the subUser's email.
 */
class SubUsersIdGet extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/subUsers/{$this->id}";
	}


	/**
	 * @param int $id The id of the SubUser
	 */
	public function __construct(
		protected int $id,
	) {
	}
}
