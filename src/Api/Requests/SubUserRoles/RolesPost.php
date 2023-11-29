<?php

namespace Eele94\Tonic\Api\Requests\SubUserRoles;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * RolesPost
 *
 * Create a new role for SubUsers.
 */
class RolesPost extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/roles';
    }

    public function __construct()
    {
    }
}
