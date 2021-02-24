<?php namespace Captchamarketing\Testimonials\Components;

use Captchamarketing\Testimonials\Models\Testimonial;
use Cms\Classes\ComponentBase;

class TestimonialList extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'TestimonialList Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [
            'maxItems' => [
                'title' => 'Max no. of testimonials',
                'default' => 3,
                'type' => 'string'
            ]
        ];
    }

    public function testimonials()
    {
        $maxItem = $this->property('maxItems');
        $testimonials = Testimonial::all();
        return $testimonials;
    }
}
