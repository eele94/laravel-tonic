<?php

namespace App\Http\Integrations\Tonic\Resource;

use App\Http\Integrations\Tonic\Requests\Countries\CountriesGet;
use App\Http\Integrations\Tonic\Resource;
use Saloon\Http\Response;

class Countries extends Resource
{
    public function countriesGet(): Response
    {
        return $this->connector->send(new CountriesGet());
    }
}
