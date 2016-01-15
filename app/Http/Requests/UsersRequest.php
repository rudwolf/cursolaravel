<?php

namespace App\Http\Requests;

use App\Http\Requests\AbstractRequest;

class UsersRequest extends AbstractRequest
{
    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email'
    ];
}
