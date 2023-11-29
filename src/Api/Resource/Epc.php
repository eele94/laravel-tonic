<?php

namespace Eele94\Tonic\Api\Resource;

use Eele94\Tonic\Api\Requests\Epc\EpcEstimationUpdateUntilGet;
use Eele94\Tonic\Api\Requests\Epc\EpcLastFinalDateGet;
use Eele94\Tonic\Api\Resource;
use Saloon\Http\Response;

class Epc extends Resource
{
    public function epcLastFinalDateGet(): Response
    {
        return $this->connector->send(new EpcLastFinalDateGet());
    }

    public function epcEstimationUpdateUntilGet(): Response
    {
        return $this->connector->send(new EpcEstimationUpdateUntilGet());
    }
}
