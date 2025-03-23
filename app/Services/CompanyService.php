<?php

namespace App\Services;

use App\Enum\HistoryOperation;
use App\Models\Company;
use App\Repositories\CompanyRepository;
use App\Traits\HandleHistory;

class CompanyService
{
    use HandleHistory;

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

        $this->storeHistory(
            HistoryOperation::UPDATE()->getValue(),
            'company',
            $company->name
        );

        return $company;
    }
}
