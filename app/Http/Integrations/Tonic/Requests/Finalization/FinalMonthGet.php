<?php

namespace App\Http\Integrations\Tonic\Requests\Finalization;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * FinalMonthGet
 *
 * For a given month this endpoint checks whether the month's payment process is finalized
 */
class FinalMonthGet extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/final/month';
    }

    /**
     * @param  string  $month Month in the format yyyy-mm.
     */
    public function __construct(
        protected string $month,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['month' => $this->month]);
    }
}
