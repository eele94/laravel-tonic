<?php

namespace Eele94\Tonic;

use Eele94\Tonic\Api\Tonic as TonicClient;
use Eele94\Tonic\Api\TonicAuthenticator;
use Saloon\Contracts\Authenticator;

class Tonic extends TonicClient
{
    public function __construct()
    {
    }

    protected function defaultAuth(): ?Authenticator
    {
        return new TonicAuthenticator;
    }
}
