<?php

namespace App\Http\Integrations\Tonic\Resource;

use App\Http\Integrations\Tonic\Requests\Account\AccountBaseDataGet;
use App\Http\Integrations\Tonic\Resource;
use Saloon\Http\Response;

class Account extends Resource
{
    public function accountBaseDataGet(): Response
    {
        return $this->connector->send(new AccountBaseDataGet());
    }
}
