<?php

namespace App\Http\Integrations\Tonic\Requests\SubUsers;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * SubUsersIdPatch
 *
 * Update a SubUsers attibutes, like firstname, name and status.
 */
class SubUsersIdPatch extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/subUsers/{$this->id}";
    }

    /**
     * @param  int  $id The subuser id
     */
    public function __construct(
        protected int $id,
    ) {
    }
}
