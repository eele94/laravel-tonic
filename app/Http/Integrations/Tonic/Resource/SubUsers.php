<?php

namespace App\Http\Integrations\Tonic\Resource;

use App\Http\Integrations\Tonic\Requests\SubUsers\SubUsersGet;
use App\Http\Integrations\Tonic\Requests\SubUsers\SubUsersIdDelete;
use App\Http\Integrations\Tonic\Requests\SubUsers\SubUsersIdGet;
use App\Http\Integrations\Tonic\Requests\SubUsers\SubUsersIdPatch;
use App\Http\Integrations\Tonic\Requests\SubUsers\SubUsersIdRolesDelete;
use App\Http\Integrations\Tonic\Requests\SubUsers\SubUsersIdRolesPost;
use App\Http\Integrations\Tonic\Requests\SubUsers\SubUsersIdVerificationPost;
use App\Http\Integrations\Tonic\Requests\SubUsers\SubUsersPost;
use App\Http\Integrations\Tonic\Resource;
use Saloon\Http\Response;

class SubUsers extends Resource
{
	/**
	 * @param string $status Get SubUsers of only one status.<br /><i>Available Values</i> : active, inactive
	 */
	public function subUsersGet(?string $status): Response
	{
		return $this->connector->send(new SubUsersGet($status));
	}


	public function subUsersPost(): Response
	{
		return $this->connector->send(new SubUsersPost());
	}


	/**
	 * @param int $id The id of the SubUser
	 */
	public function subUsersIdGet(int $id): Response
	{
		return $this->connector->send(new SubUsersIdGet($id));
	}


	/**
	 * @param int $id The id of the SubUser to delete
	 */
	public function subUsersIdDelete(int $id): Response
	{
		return $this->connector->send(new SubUsersIdDelete($id));
	}


	/**
	 * @param int $id The subuser id
	 */
	public function subUsersIdPatch(int $id): Response
	{
		return $this->connector->send(new SubUsersIdPatch($id));
	}


	/**
	 * @param string $id Sub user id
	 */
	public function subUsersIdVerificationPost(string $id): Response
	{
		return $this->connector->send(new SubUsersIdVerificationPost($id));
	}


	/**
	 * @param int $id id of the SubUser
	 */
	public function subUsersIdRolesPost(int $id): Response
	{
		return $this->connector->send(new SubUsersIdRolesPost($id));
	}


	/**
	 * @param int $id The id of the SubUser
	 */
	public function subUsersIdRolesDelete(int $id): Response
	{
		return $this->connector->send(new SubUsersIdRolesDelete($id));
	}
}
