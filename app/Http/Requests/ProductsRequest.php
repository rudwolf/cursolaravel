<?php

namespace App\Http\Requests;

use App\Http\Requests\AbstractRequest;

class ProductsRequest extends AbstractRequest
{
    protected $rules = [
        'title' => 'required|min:3',
        'body' => 'required',
        'value' => 'required|numeric',
        'qtd' => 'required|numeric',
    ];

    protected $messages = [
        'body.required' => 'O campo descrição é obrigatório',
    ];

}
