<?php

namespace Eele94\Tonic\Api\Requests\SubUserRoles;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * RolesIdGet
 *
 * Get Role and SubUsers that have it assigned.
 */
class RolesIdGet extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/roles/{$this->id}";
    }

    /**
     * @param  int  $id The role id
     */
    public function __construct(
        protected int $id,
    ) {
    }
}
