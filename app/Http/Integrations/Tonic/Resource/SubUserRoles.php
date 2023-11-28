<?php

namespace App\Http\Integrations\Tonic\Resource;

use App\Http\Integrations\Tonic\Requests\SubUserRoles\RolesGet;
use App\Http\Integrations\Tonic\Requests\SubUserRoles\RolesIdDelete;
use App\Http\Integrations\Tonic\Requests\SubUserRoles\RolesIdGet;
use App\Http\Integrations\Tonic\Requests\SubUserRoles\RolesIdPut;
use App\Http\Integrations\Tonic\Requests\SubUserRoles\RolesPost;
use App\Http\Integrations\Tonic\Resource;
use Saloon\Http\Response;

class SubUserRoles extends Resource
{
	public function rolesGet(): Response
	{
		return $this->connector->send(new RolesGet());
	}


	public function rolesPost(): Response
	{
		return $this->connector->send(new RolesPost());
	}


	/**
	 * @param int $id The role id
	 */
	public function rolesIdGet(int $id): Response
	{
		return $this->connector->send(new RolesIdGet($id));
	}


	/**
	 * @param int $id The role id
	 */
	public function rolesIdPut(int $id): Response
	{
		return $this->connector->send(new RolesIdPut($id));
	}


	/**
	 * @param int $id The id of the role
	 */
	public function rolesIdDelete(int $id): Response
	{
		return $this->connector->send(new RolesIdDelete($id));
	}
}
