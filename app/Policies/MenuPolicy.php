<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\Menu;
use Illuminate\Auth\Access\HandlesAuthorization;

class MenuPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:Menu');
    }

    public function view(AuthUser $authUser, Menu $menu): bool
    {
        return $authUser->can('View:Menu');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:Menu');
    }

    public function update(AuthUser $authUser, Menu $menu): bool
    {
        return $authUser->can('Update:Menu');
    }

    public function delete(AuthUser $authUser, Menu $menu): bool
    {
        return $authUser->can('Delete:Menu');
    }

    public function restore(AuthUser $authUser, Menu $menu): bool
    {
        return $authUser->can('Restore:Menu');
    }

    public function forceDelete(AuthUser $authUser, Menu $menu): bool
    {
        return $authUser->can('ForceDelete:Menu');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:Menu');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:Menu');
    }

    public function replicate(AuthUser $authUser, Menu $menu): bool
    {
        return $authUser->can('Replicate:Menu');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:Menu');
    }

}