<?php

namespace Eele94\Tonic\Api\Resource;

use Eele94\Tonic\Api\Requests\SubUsers\SubUsersGet;
use Eele94\Tonic\Api\Requests\SubUsers\SubUsersIdDelete;
use Eele94\Tonic\Api\Requests\SubUsers\SubUsersIdGet;
use Eele94\Tonic\Api\Requests\SubUsers\SubUsersIdPatch;
use Eele94\Tonic\Api\Requests\SubUsers\SubUsersIdRolesDelete;
use Eele94\Tonic\Api\Requests\SubUsers\SubUsersIdRolesPost;
use Eele94\Tonic\Api\Requests\SubUsers\SubUsersIdVerificationPost;
use Eele94\Tonic\Api\Requests\SubUsers\SubUsersPost;
use Eele94\Tonic\Api\Resource;
use Saloon\Http\Response;

class SubUsers extends Resource
{
    /**
     * @param  string  $status  Get SubUsers of only one status.<br /><i>Available Values</i> : active, inactive
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
     * @param  int  $id  The id of the SubUser
     */
    public function subUsersIdGet(int $id): Response
    {
        return $this->connector->send(new SubUsersIdGet($id));
    }

    /**
     * @param  int  $id  The id of the SubUser to delete
     */
    public function subUsersIdDelete(int $id): Response
    {
        return $this->connector->send(new SubUsersIdDelete($id));
    }

    /**
     * @param  int  $id  The subuser id
     */
    public function subUsersIdPatch(int $id): Response
    {
        return $this->connector->send(new SubUsersIdPatch($id));
    }

    /**
     * @param  string  $id  Sub user id
     */
    public function subUsersIdVerificationPost(string $id): Response
    {
        return $this->connector->send(new SubUsersIdVerificationPost($id));
    }

    /**
     * @param  int  $id  id of the SubUser
     */
    public function subUsersIdRolesPost(int $id): Response
    {
        return $this->connector->send(new SubUsersIdRolesPost($id));
    }

    /**
     * @param  int  $id  The id of the SubUser
     */
    public function subUsersIdRolesDelete(int $id): Response
    {
        return $this->connector->send(new SubUsersIdRolesDelete($id));
    }
}
