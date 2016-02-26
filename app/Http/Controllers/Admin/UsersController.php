<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UsersRequest;
use App\Http\Controllers\CrudController;

class UsersController extends CrudController
{
    protected $model = '\App\User';
    protected $path = 'users';
    protected $route_base_name = 'admin.users';

    public function __construct(UsersRequest $request)
    {

    }

}
