<?php

use Eele94\Tonic\Api\Requests\Offers\OffersGet;

it('can get offers', function () {
    $tonic = new \Eele94\Tonic\Tonic();
    $response = $tonic->send(new OffersGet());
    dd($response);
    expect(true)->toBeTrue();
});
