<?php

namespace App\Controllers\Modules;
use App\Services\Queries;
class Info
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module,
            'info' => $this->getData()
        ];
    }
    protected function getData()
    {
        return Queries::getInfo();
    }
}
