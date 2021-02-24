<?php namespace Captchamarketing\Consultationform\Components;

use Captchamarketing\Consultationform\Models\Contact;
use Cms\Classes\ComponentBase;
use Illuminate\Support\Facades\Validator;
use October\Rain\Exception\ValidationException;
use October\Rain\Support\Facades\Flash;

class ContactForm extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'ContactForm Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    function onSubmitContactForm()
    {
        $data = post();
        $rules = [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required|max:250'
        ];
        $validation = Validator::make($data, $rules);

        if ($validation->fails()) {
            throw new ValidationException($validation);
        }
        Contact::create($data);
        Flash::success('Your message has been sent succesfully!');
    }

}
