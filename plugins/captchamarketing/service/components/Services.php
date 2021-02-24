<?php

namespace CaptchaMarketing\Service\Components;

use CaptchaMarketing\Service\Models\Service;
use Cms\Classes\ComponentBase;

class Services extends ComponentBase
{
    public function componentDetails()
    {
        // TODO: Implement componentDetails() method.
        return [
          'name' => 'Service',
            'description' => 'Display a single service'
        ];
    }

    public function service()
    {
        $id = $this->paramName('id');
        $service = Service::where(['id' => $id])->first();
        return $service;
    }
}
