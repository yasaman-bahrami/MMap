<?php

namespace App\Policies;

use App\Resource;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ResourcePolicy
{
    use HandlesAuthorization;

    public function __construct()
    {

    }

    public function destroy(User $user, Resource $resource)
    {
        return $user->id === $resource->user_id;
    }

    public function store(User $user, Resource $resource)
    {
        return $user->id === $resource->user_id;
    }
}
