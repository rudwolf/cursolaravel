<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AbstractRequest extends Request
{
    protected $actionsToValidate = ['store', 'update'];

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        if ( ( $this->isMethod('post') or $this->isMethod('put') ) and $this->checkAction())
            return $this->rules;
        return[];
    }

    public function messages()
    {
        $defaultMessages = [
            'required' => 'O campo :attribute não pode ficar vazio',
            'numeric' => 'O campo :attribute deve conter apenas números',
            'min' => 'O campo :attribute deve conter no mínimo :min caractéres'
        ];
        $messages = $defaultMessages;

        if (!empty($this->messages))
            $messages = array_merge($defaultMessages, $this->messages);
        if ( ( $this->isMethod('post') or $this->isMethod('put') ) and $this->checkAction())
            return $messages;
        return[];

    }

    protected function checkAction()
    {
        if (empty($this->route()->getAction()['as']))
            return false;

        $base = explode('.',$this->route()->getAction()['as']);

        if (empty($base['1']))
            return false;

        return in_array($base['1'], $this->actionsToValidate);
    }
}
