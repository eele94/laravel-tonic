<?php

namespace App\Http\Integrations\Tonic\Requests\Compliance;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * ComplianceSiteIdsGet
 *
 * Returns a list of currently non compliant siteIds.
 */
class ComplianceSiteIdsGet extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/compliance/siteIds';
    }

    /**
     * @param  string  $network The network to get the ids for.<br /><i>Available Values</i> : taboola, outbrain
     * @param  null|int  $limit The limit of returned paginated data
     * @param  null|int  $offset The offset of returned paginated data
     */
    public function __construct(
        protected string $network,
        protected ?int $limit = null,
        protected ?int $offset = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['network' => $this->network, 'limit' => $this->limit, 'offset' => $this->offset]);
    }
}
