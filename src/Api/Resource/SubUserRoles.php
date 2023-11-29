<?php

namespace Eele94\Tonic\Api\Resource;

use Eele94\Tonic\Api\Requests\SubUserRoles\RolesGet;
use Eele94\Tonic\Api\Requests\SubUserRoles\RolesIdDelete;
use Eele94\Tonic\Api\Requests\SubUserRoles\RolesIdGet;
use Eele94\Tonic\Api\Requests\SubUserRoles\RolesIdPut;
use Eele94\Tonic\Api\Requests\SubUserRoles\RolesPost;
use Eele94\Tonic\Api\Resource;
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
     * @param  int  $id The role id
     */
    public function rolesIdGet(int $id): Response
    {
        return $this->connector->send(new RolesIdGet($id));
    }

    /**
     * @param  int  $id The role id
     */
    public function rolesIdPut(int $id): Response
    {
        return $this->connector->send(new RolesIdPut($id));
    }

    /**
     * @param  int  $id The id of the role
     */
    public function rolesIdDelete(int $id): Response
    {
        return $this->connector->send(new RolesIdDelete($id));
    }
}
