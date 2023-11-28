<?php

namespace App\Http\Integrations\Tonic\Requests\SubUsers;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * SubUsersIdRolesPost
 *
 * Assigning a SubUserRole to a SubUser.
 */
class SubUsersIdRolesPost extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/subUsers/{$this->id}/roles";
	}


	/**
	 * @param int $id id of the SubUser
	 */
	public function __construct(
		protected int $id,
	) {
	}
}
