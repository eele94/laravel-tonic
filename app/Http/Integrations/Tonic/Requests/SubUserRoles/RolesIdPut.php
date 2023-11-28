<?php

namespace App\Http\Integrations\Tonic\Requests\SubUserRoles;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * RolesIdPut
 *
 * Updates a SubUserRole if changes were detected.
 */
class RolesIdPut extends Request
{
    protected Method $method = Method::PUT;

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
