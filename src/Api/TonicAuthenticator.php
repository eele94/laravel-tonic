<?php

namespace Eele94\Tonic\Api;

use Eele94\Tonic\Api\Requests\Authorization\JwtAuthenticatePost;
use Saloon\Contracts\Authenticator;
use Saloon\Http\PendingRequest;

class TonicAuthenticator implements Authenticator
{
    public function __construct(protected ?string $consumerKey = null, protected ?string $consumerSecret = null)
    {
        if ($this->consumerKey === null) {
            $this->consumerKey = config('tonic.api_key');
            if ($this->consumerKey === null) {
                throw new \Exception('Tonic API Key is not set.');
            }
        }
        if ($this->consumerSecret === null) {
            $this->consumerSecret = config('tonic.api_secret');
            if ($this->consumerSecret === null) {
                throw new \Exception('Tonic API Secret is not set.');
            }
        }
    }

    public function set(PendingRequest $pendingRequest): void
    {
        // Make sure to ignore the authentication request to prevent loops.

        if ($pendingRequest->getRequest() instanceof JwtAuthenticatePost) {
            return;
        }

        // Make a request to the Authentication endpoint using the same connector.
        $response = $pendingRequest->getConnector()->send(new JwtAuthenticatePost($this->consumerKey, $this->consumerSecret));

        // Finally, authenticate the previous PendingRequest before it is sent.
        $pendingRequest->headers()->add('Authorization', 'Bearer '.$response->json('data.accessToken.token'));
    }
}
