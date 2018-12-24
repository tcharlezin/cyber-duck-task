<?php

namespace App\Service\Company;

use App\Models\Company;

class DestroyCompany
{
    private $company;

    public function __construct(Company $company)
    {
        $this->company = $company;
    }

    public function execute()
    {
        $this->destroyEmployees();
        $this->updateLogo();
        $this->destroyCompany();
    }

    private function destroyEmployees()
    {
        foreach ($this->company->employees as $employee)
        {
            $employee->delete();
        }
    }

    private function updateLogo()
    {
        (new UpdateLogo($this->company, null))->execute();
    }

    private function destroyCompany()
    {
        $this->company->delete();
    }
}