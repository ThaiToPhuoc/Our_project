<?php

namespace App\Controllers\Modules;

use App\Services\Queries;

class Content
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module,
            'content' => $this->getData()
        ];
    }

    protected function getData()
    {
        return Queries::getContent();
    }

}
