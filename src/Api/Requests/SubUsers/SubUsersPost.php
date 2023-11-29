<?php

namespace Eele94\Tonic\Api\Requests\SubUsers;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * SubUsersPost
 *
 * Create a new SubUser.
 */
class SubUsersPost extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/subUsers';
    }

    public function __construct()
    {
    }
}
