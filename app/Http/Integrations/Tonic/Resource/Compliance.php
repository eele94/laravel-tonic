<?php

namespace App\Http\Integrations\Tonic\Resource;

use App\Http\Integrations\Tonic\Requests\Compliance\ComplianceSiteIdsGet;
use App\Http\Integrations\Tonic\Resource;
use Saloon\Http\Response;

class Compliance extends Resource
{
	/**
	 * @param string $network The network to get the ids for.<br /><i>Available Values</i> : taboola, outbrain
	 * @param int $limit The limit of returned paginated data
	 * @param int $offset The offset of returned paginated data
	 */
	public function complianceSiteIdsGet(string $network, ?int $limit, ?int $offset): Response
	{
		return $this->connector->send(new ComplianceSiteIdsGet($network, $limit, $offset));
	}
}
