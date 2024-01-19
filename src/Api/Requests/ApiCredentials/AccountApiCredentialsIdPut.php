<?php

namespace Eele94\Tonic\Api\Requests\ApiCredentials;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * AccountApiCredentialsIdPut
 *
 * Update an ApiCredential.
 */
class AccountApiCredentialsIdPut extends Request
{
    protected Method $method = Method::PUT;

    public function resolveEndpoint(): string
    {
        return "/account/apiCredentials/{$this->id}";
    }

    /**
     * @param  int  $id  The id of the ApiCredential
     */
    public function __construct(
        protected int $id,
    ) {
    }
}
