<?php

namespace App\Http\Integrations\Tonic\Requests\SubUsers;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * SubUsersIdRolesDelete
 *
 * Unassign a SubUserRole for a SubUser.
 */
class SubUsersIdRolesDelete extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/subUsers/{$this->id}/roles";
	}


	/**
	 * @param int $id The id of the SubUser
	 */
	public function __construct(
		protected int $id,
	) {
	}
}
