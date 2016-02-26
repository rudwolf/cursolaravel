<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CrudController extends Controller
{
    public $model_instance;

    public function index()
    {
        $data = $this->getModel()->all();
        return view ($this->path.'.index', ['data'=>$data]);
    }

    public function create()
    {
        return view ($this->path.'.create');
    }

    public function store(Request $request)
    {
        $this->getModel()->create($request->all());
        return redirect()->route($this->route_base_name.'.index');
    }

    public function show($id)
    {
        $data = $this->getModel()->find($id);
        return view ($this->path.'.show', ['data'=>$data]);
    }

    public function edit($id)
    {
        $data = $this->getModel()->find($id);
        return view ($this->path.'.edit', ['data'=>$data]);
    }

    public function update(Request $request, $id)
    {
        $item = $this->getModel()->find($id);
        $item->update($request->all());
        return redirect()->route($this->route_base_name.'.index');
    }

    public function destroy($id)
    {
        $item = $this->getModel()->find($id);
        $item->delete();
        return redirect()->route($this->route_base_name.'.index');
    }

    protected function getModel()
    {
        if ($this->model_instance === null)
            $this->model_instance = new $this->model;

        return $this->model_instance;
    }
}
