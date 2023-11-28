<?php

namespace App\Http\Integrations\Tonic\Resource;

use App\Http\Integrations\Tonic\Requests\Epc\EpcEstimationUpdateUntilGet;
use App\Http\Integrations\Tonic\Requests\Epc\EpcLastFinalDateGet;
use App\Http\Integrations\Tonic\Resource;
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
