<?php

namespace Eele94\Tonic\Api\Resource;

use Eele94\Tonic\Api\Requests\Authorization\JwtAuthenticatePost;
use Eele94\Tonic\Api\Requests\Authorization\JwtRefreshPost;
use Eele94\Tonic\Api\Resource;
use Saloon\Http\Response;

class Authorization extends Resource
{
	public function jwtAuthenticatePost(): Response
	{
		return $this->connector->send(new JwtAuthenticatePost());
	}


	public function jwtRefreshPost(): Response
	{
		return $this->connector->send(new JwtRefreshPost());
	}
}
