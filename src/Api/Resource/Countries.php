<?php

namespace Eele94\Tonic\Api\Resource;

use Eele94\Tonic\Api\Requests\Countries\CountriesGet;
use Eele94\Tonic\Api\Resource;
use Saloon\Http\Response;

class Countries extends Resource
{
    public function countriesGet(): Response
    {
        return $this->connector->send(new CountriesGet());
    }
}
