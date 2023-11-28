<?php

namespace App\Http\Integrations\Tonic;

use Saloon\Http\Connector;

class Resource
{
	public function __construct(
		protected Connector $connector,
	) {
	}
}
