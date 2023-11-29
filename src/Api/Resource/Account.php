<?php

namespace Eele94\Tonic\Api\Resource;

use Eele94\Tonic\Api\Requests\Account\AccountBaseDataGet;
use Eele94\Tonic\Api\Resource;
use Saloon\Http\Response;

class Account extends Resource
{
    public function accountBaseDataGet(): Response
    {
        return $this->connector->send(new AccountBaseDataGet());
    }
}
