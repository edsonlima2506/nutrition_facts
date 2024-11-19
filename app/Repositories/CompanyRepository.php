<?php

namespace App\Repositories;

use App\Models\Company;

class CompanyRepository
{
    /**
     * @param Company $company
     * @param array $data
     * 
     * @return void
     */
    public function updateCompany(Company $company, array $data): void
    {
        $company->update($data);
    }
}