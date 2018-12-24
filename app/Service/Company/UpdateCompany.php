<?php

namespace App\Service\Company;

use App\Models\Company;

class UpdateCompany
{
    private $company;
    private $data;
    private $file;

    public function __construct(Company $company, $data)
    {
        $this->company = $company;
        $this->data = $data;
    }

    public function execute()
    {
        $this->loadFile();
        $this->updateCompany();

        if (! is_null($this->file))
        {
            $this->updateLogo();
        }
    }

    private function loadFile()
    {
        if(isset($this->data["logo"]))
        {
            $this->file = $this->data["logo"];
            unset($this->data["logo"]);
        }
    }

    private function updateCompany()
    {
        $this->company->update($this->data);
    }

    private function updateLogo()
    {
        (new UpdateLogo($this->company, $this->file))->execute();
    }
}