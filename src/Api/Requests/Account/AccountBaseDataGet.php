<?php

namespace Eele94\Tonic\Api\Requests\Account;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * AccountBaseDataGet
 *
 * Returns the users mail, first- and lastname. In case of a subuser it will also return its role and
 * the associated rights.
 */
class AccountBaseDataGet extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/account/baseData';
    }

    public function __construct()
    {
    }
}
