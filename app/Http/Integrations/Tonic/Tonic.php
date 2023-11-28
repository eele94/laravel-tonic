<?php

namespace App\Http\Integrations\Tonic;

use App\Http\Integrations\Tonic\Resource\Account;
use App\Http\Integrations\Tonic\Resource\ApiCredentials;
use App\Http\Integrations\Tonic\Resource\Authorization;
use App\Http\Integrations\Tonic\Resource\Compliance;
use App\Http\Integrations\Tonic\Resource\Countries;
use App\Http\Integrations\Tonic\Resource\Epc;
use App\Http\Integrations\Tonic\Resource\Finalization;
use App\Http\Integrations\Tonic\Resource\Keywords;
use App\Http\Integrations\Tonic\Resource\Offers;
use App\Http\Integrations\Tonic\Resource\SubUserRoles;
use App\Http\Integrations\Tonic\Resource\SubUsers;
use Saloon\Http\Connector;

/**
 * TONIC. for Publishers API
 *
 * This is the documentation for the "TONIC. for Publishers API". Currently this API is in beta and is subject to change. If you have any questions or feedback, please contact us via the UIs Feedback form or your Account Manager.
 */
class Tonic extends Connector
{
    public function resolveBaseUrl(): string
    {
        return 'https://api.publisher.tonic.com/v4';
    }


    public function account(): Account
    {
        return new Account($this);
    }


    public function apiCredentials(): ApiCredentials
    {
        return new ApiCredentials($this);
    }


    public function authorization(): Authorization
    {
        return new Authorization($this);
    }


    public function compliance(): Compliance
    {
        return new Compliance($this);
    }


    public function countries(): Countries
    {
        return new Countries($this);
    }


    public function epc(): Epc
    {
        return new Epc($this);
    }


    public function finalization(): Finalization
    {
        return new Finalization($this);
    }


    public function keywords(): Keywords
    {
        return new Keywords($this);
    }


    public function offers(): Offers
    {
        return new Offers($this);
    }


    public function subUserRoles(): SubUserRoles
    {
        return new SubUserRoles($this);
    }


    public function subUsers(): SubUsers
    {
        return new SubUsers($this);
    }
}
