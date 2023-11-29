<?php

namespace Eele94\Tonic\Api\Resource;

use Eele94\Tonic\Api\Requests\ApiCredentials\AccountApiCredentialsGet;
use Eele94\Tonic\Api\Requests\ApiCredentials\AccountApiCredentialsIdDelete;
use Eele94\Tonic\Api\Requests\ApiCredentials\AccountApiCredentialsIdGet;
use Eele94\Tonic\Api\Requests\ApiCredentials\AccountApiCredentialsIdPut;
use Eele94\Tonic\Api\Requests\ApiCredentials\AccountApiCredentialsPost;
use Eele94\Tonic\Api\Resource;
use Saloon\Http\Response;

class ApiCredentials extends Resource
{
    public function accountApiCredentialsGet(): Response
    {
        return $this->connector->send(new AccountApiCredentialsGet());
    }

    public function accountApiCredentialsPost(): Response
    {
        return $this->connector->send(new AccountApiCredentialsPost());
    }

    /**
     * @param  int  $id The id of the ApiCredential
     */
    public function accountApiCredentialsIdGet(int $id): Response
    {
        return $this->connector->send(new AccountApiCredentialsIdGet($id));
    }

    /**
     * @param  int  $id The id of the ApiCredential
     */
    public function accountApiCredentialsIdPut(int $id): Response
    {
        return $this->connector->send(new AccountApiCredentialsIdPut($id));
    }

    /**
     * @param  int  $id The id of the ApiCredential
     */
    public function accountApiCredentialsIdDelete(int $id): Response
    {
        return $this->connector->send(new AccountApiCredentialsIdDelete($id));
    }
}
