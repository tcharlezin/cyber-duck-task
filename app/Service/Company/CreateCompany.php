<?php

namespace App\Service\Company;

use App\Models\Company;

class CreateCompany
{
    private $data;
    private $company;
    private $file;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function execute()
    {
        $this->loadFile();
        $this->createCompany();

        if (!is_null($this->file))
        {
            $this->updateLogo();
        }
    }

    private function loadFile()
    {
        if (isset($this->data["logo"]))
        {
            $this->file = $this->data["logo"];
            unset($this->data["logo"]);
        }
    }

    private function createCompany()
    {
        $this->company = Company::create($this->data);
    }

    private function updateLogo()
    {
        (new UpdateLogo($this->company, $this->file))->execute();
    }
}