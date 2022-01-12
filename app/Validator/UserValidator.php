<?php

namespace App\Vaidator;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserValidator
{

    /**
     *
     * @var Request
     */
    private $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function validate()
    {
        return Validator::make($this->request->all(), $this->rules(), $this->messages());
    }

    private function rules()
    {
        return [
            "firsname" => "required",
            "lastname" => "required",
            "document_type" => "required",
            "document_number" => "required│unique:users,document_number" . $this->require->id,
            "email" => "required│unique:users,email" . $this->require->id,
            "password" => "required",
            "confirm_password" => "required:same:password",
            "phone" => "required",
        ];
    }

    private function messages()
    {
    }
}
