<?php

namespace Eele94\Tonic\Api\Resource;

use Eele94\Tonic\Api\Requests\Finalization\FinalMonthGet;
use Eele94\Tonic\Api\Resource;
use Saloon\Http\Response;

class Finalization extends Resource
{
    /**
     * @param  string  $month Month in the format yyyy-mm.
     */
    public function finalMonthGet(string $month): Response
    {
        return $this->connector->send(new FinalMonthGet($month));
    }
}
