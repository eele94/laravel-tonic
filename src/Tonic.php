<?php

namespace Eele94\Tonic;

use Eele94\Tonic\Api\Requests\Offers\OffersGet;
use Eele94\Tonic\Api\Tonic as TonicClient;
use Eele94\Tonic\Api\TonicAuthenticator;
use Eele94\Tonic\Models\TonicOffer;
use Eele94\Tonic\Models\TonicVertical;
use Saloon\Contracts\Authenticator;

class Tonic extends TonicClient
{
    public function __construct()
    {
    }

    protected function defaultAuth(): ?Authenticator
    {
        return new TonicAuthenticator();
    }

    public function syncOffers()
    {
        $data = $this->send(new OffersGet())->json('data');
        foreach ($data as $item) {
            TonicVertical::updateOrCreate([
                'id' => $item['vertical']['id'],
            ], [
                'name' => $item['vertical']['name'],
            ]);

            TonicOffer::updateOrCreate([
                'id' => $item['id'],
            ], [
                'name' => $item['name'],
                'vertical_id' => $item['vertical']['id'],
            ]);
        }
    }
}
