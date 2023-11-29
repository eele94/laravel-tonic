<?php

namespace Eele94\Tonic\Api\Requests\SubUsers;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * SubUsersIdVerificationPost
 *
 * Send a verification email to the sub user if none was sent before or the last one was expired. The
 * email contains a verification token which is valid for 48 hours. Also invalidates all previously
 * sent tokens.
 */
class SubUsersIdVerificationPost extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return "/subUsers/{$this->id}/verification";
    }

    /**
     * @param  string  $id Sub user id
     */
    public function __construct(
        protected string $id,
    ) {
    }
}
