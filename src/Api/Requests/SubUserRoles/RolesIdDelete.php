<?php

namespace Eele94\Tonic\Api\Requests\SubUserRoles;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * RolesIdDelete
 *
 * Delete a role for SubUsers.
 */
class RolesIdDelete extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/roles/{$this->id}";
	}


	/**
	 * @param int $id The id of the role
	 */
	public function __construct(
		protected int $id,
	) {
	}
}
