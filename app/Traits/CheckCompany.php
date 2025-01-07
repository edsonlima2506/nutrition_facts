<?php

namespace App\Traits;

trait CheckCompany
{
    /**
     * @param mixed $entry
     * 
     * @return void
     */
    public function checkUserCompany(mixed $entry): void
    {
        $user = backpack_user();

        if ($user->hasRole('super_admin')) return;

        if (!$entry->company_id) return;

        if ($user->company_id != $entry->company_id) {
            abort(403);
        }
    }

    /**
     * @return void
     */
    protected function setCompanyVisibility(): void
    {
        if (!backpack_user()->hasRole('super_admin')) {
            $this->crud->addClause('whereNotNull', 'company_id');
            $this->crud->addClause('where', 'company_id', backpack_user()->company_id);
        }
    }
}
