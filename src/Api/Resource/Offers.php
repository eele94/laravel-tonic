<?php

namespace Eele94\Tonic\Api\Resource;

use Eele94\Tonic\Api\Requests\Offers\OffersGet;
use Eele94\Tonic\Api\Resource;
use Saloon\Http\Response;

class Offers extends Resource
{
    public function offersGet(): Response
    {
        return $this->connector->send(new OffersGet());
    }
}
