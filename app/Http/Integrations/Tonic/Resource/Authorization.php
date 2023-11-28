<?php

namespace App\Http\Integrations\Tonic\Resource;

use App\Http\Integrations\Tonic\Requests\Authorization\JwtAuthenticatePost;
use App\Http\Integrations\Tonic\Requests\Authorization\JwtRefreshPost;
use App\Http\Integrations\Tonic\Resource;
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
