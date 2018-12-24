<?php

namespace App\Service\Company;

use App\Models\Company;
use Illuminate\Support\Facades\Storage;

class UpdateLogo
{
    private $company;
    private $newFile;

    public function __construct(Company $company, $newFile)
    {
        $this->company = $company;
        $this->newFile = $newFile;
    }

    public function execute()
    {
        $this->cleanDirectory();

        if (is_null($this->newFile))
        {
            return;
        }

        $randomName = Storage::putFile($this->getDirectoryUpload(), $this->newFile);

        $this->company->logo = Storage::url($randomName);
        $this->company->save();
    }

    private function cleanDirectory()
    {
        $files = Storage::files($this->getDirectoryUpload());

        foreach ($files as $file)
        {
            Storage::delete($file);
        }
    }

    private function getDirectoryUpload()
    {
        return sprintf("public/company/%s/logo", $this->company->id);
    }
}