<?php

namespace App\Controllers\Modules;
use App\Services\Queries;

class ContentSub
{
    public function dataModule($module)
    {
        $subcontent = $this->getData();
        return (object) [
            'module' => $module,
            'subcontent' => $subcontent
        ];
    }
    protected function getData()
    {
        return Queries::getSubContent();
    }
}
