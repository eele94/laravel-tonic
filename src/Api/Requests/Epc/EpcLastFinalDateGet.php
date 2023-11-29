<?php

namespace Eele94\Tonic\Api\Requests\Epc;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * EpcLastFinalDateGet
 *
 * Get information about the last finalization.
 */
class EpcLastFinalDateGet extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/epc/lastFinalDate';
    }

    public function __construct()
    {
    }
}
