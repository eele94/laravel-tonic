<?php

namespace App\Http\Integrations\Tonic\Requests\Authorization;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * JwtRefreshPost
 *
 * Get a new JSON Web Token by providing a refresh token
 */
class JwtRefreshPost extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/jwt/refresh';
    }

    public function __construct()
    {
    }
}
