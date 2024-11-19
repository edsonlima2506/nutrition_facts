<?php

namespace App\Traits;

use App\Models\Company;

trait CheckPermissions
{
    /**
     * @param string $permission
     * 
     * @return void
     */
    public function checkIfUserHasPermission(string $permission): void
    {
        $user = backpack_user();

        if(!$user->hasPermissionTo($permission)) {
            abort(403);
        }
    }

    /**
     * @param Company $company
     * 
     * @return void
     */
    public function checkIfUserBelongsCompany(Company $company): void
    {
        $user = backpack_user();

        if ($user->company_id != $company->id) {
            abort(403);
        }
    }
}