<?php

namespace Eele94\Tonic\Api\Requests\Authorization;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * JwtAuthenticatePost
 *
 * Returns a JWT Token and its exipre timestamp aswell as the corresponding refresh token
 */
class JwtAuthenticatePost extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/jwt/authenticate';
    }

    public function defaultBody(): array
    {
        return [
            'consumerKey' => $this->consumerKey,
            'consumerSecret' => $this->consumerSecret,
        ];
    }

    public function __construct(protected string $consumerKey, protected string $consumerSecret)
    {
    }
}
