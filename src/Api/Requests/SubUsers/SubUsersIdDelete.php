<?php

namespace Eele94\Tonic\Api\Requests\SubUsers;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * SubUsersIdDelete
 *
 * Delete an existing SubUser.
 */
class SubUsersIdDelete extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/subUsers/{$this->id}";
    }

    /**
     * @param  int  $id The id of the SubUser to delete
     */
    public function __construct(
        protected int $id,
    ) {
    }
}
