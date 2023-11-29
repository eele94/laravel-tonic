<?php

namespace Eele94\Tonic\Api\Requests\SubUsers;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * SubUsersGet
 *
 * Get all or a status filtered list of SubUsers.
 */
class SubUsersGet extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/subUsers";
	}


	/**
	 * @param null|string $status Get SubUsers of only one status.<br /><i>Available Values</i> : active, inactive
	 */
	public function __construct(
		protected ?string $status = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['status' => $this->status]);
	}
}
