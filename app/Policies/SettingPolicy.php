<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use Subham\FilamentDynamicSettings\Models\Setting;
use Illuminate\Auth\Access\HandlesAuthorization;

class SettingPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:Setting');
    }

    public function view(AuthUser $authUser, Setting $setting): bool
    {
        return $authUser->can('View:Setting');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:Setting');
    }

    public function update(AuthUser $authUser, Setting $setting): bool
    {
        return $authUser->can('Update:Setting');
    }

    public function delete(AuthUser $authUser, Setting $setting): bool
    {
        return $authUser->can('Delete:Setting');
    }

    public function restore(AuthUser $authUser, Setting $setting): bool
    {
        return $authUser->can('Restore:Setting');
    }

    public function forceDelete(AuthUser $authUser, Setting $setting): bool
    {
        return $authUser->can('ForceDelete:Setting');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:Setting');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:Setting');
    }

    public function replicate(AuthUser $authUser, Setting $setting): bool
    {
        return $authUser->can('Replicate:Setting');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:Setting');
    }

}