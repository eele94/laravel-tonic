<?php

namespace App\Http\Integrations\Tonic\Requests\SubUserRoles;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * RolesGet
 *
 * Get all Roles that are available.
 */
class RolesGet extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/roles";
	}


	public function __construct()
	{
	}
}
