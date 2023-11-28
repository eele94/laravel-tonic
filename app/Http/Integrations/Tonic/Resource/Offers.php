<?php

namespace App\Http\Integrations\Tonic\Resource;

use App\Http\Integrations\Tonic\Requests\Offers\OffersGet;
use App\Http\Integrations\Tonic\Resource;
use Saloon\Http\Response;

class Offers extends Resource
{
    public function offersGet(): Response
    {
        return $this->connector->send(new OffersGet());
    }
}
