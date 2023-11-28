<?php

namespace App\Http\Integrations\Tonic\Resource;

use App\Http\Integrations\Tonic\Requests\Finalization\FinalMonthGet;
use App\Http\Integrations\Tonic\Resource;
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
