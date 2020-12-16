<?php

namespace App\Controllers\Modules;

use App\Services\Queries;

class Banner
{
    public function dataModule($module)
    {
        $banner = $this->getData();
        return (object) [
            'module' => $module,
            'banner' => $banner
        ];
    }

    public function getData()
    {
        return Queries::getBaner();
    }
}
