<?php

namespace App\Services;

use App\Models\Company;
use App\Repositories\CompanyRepository;

class CompanyService
{
    /**
     * @var \App\Repositories\CompanyRepository
     */
    protected $companyRepository;

    /**
     * @param CompanyRepository $companyRepository
     */
    public function __construct(CompanyRepository $companyRepository)
    {
        $this->companyRepository = $companyRepository;
    }
    /**
     * @param Company $company
     * @param array $data
     * 
     * @return Company
     */
    public function updateCompany(Company $company, array $data): Company
    {
        $this->companyRepository->updateCompany($company, $data);

        return $company;
    }
}