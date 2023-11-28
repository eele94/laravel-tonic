<?php

namespace App\Http\Integrations\Tonic\Resource;

use App\Http\Integrations\Tonic\Requests\ApiCredentials\AccountApiCredentialsGet;
use App\Http\Integrations\Tonic\Requests\ApiCredentials\AccountApiCredentialsIdDelete;
use App\Http\Integrations\Tonic\Requests\ApiCredentials\AccountApiCredentialsIdGet;
use App\Http\Integrations\Tonic\Requests\ApiCredentials\AccountApiCredentialsIdPut;
use App\Http\Integrations\Tonic\Requests\ApiCredentials\AccountApiCredentialsPost;
use App\Http\Integrations\Tonic\Resource;
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
	 * @param int $id The id of the ApiCredential
	 */
	public function accountApiCredentialsIdGet(int $id): Response
	{
		return $this->connector->send(new AccountApiCredentialsIdGet($id));
	}


	/**
	 * @param int $id The id of the ApiCredential
	 */
	public function accountApiCredentialsIdPut(int $id): Response
	{
		return $this->connector->send(new AccountApiCredentialsIdPut($id));
	}


	/**
	 * @param int $id The id of the ApiCredential
	 */
	public function accountApiCredentialsIdDelete(int $id): Response
	{
		return $this->connector->send(new AccountApiCredentialsIdDelete($id));
	}
}
