<?php

namespace gpibarra\LaravelPermissionManager\app\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

//use Backpack\CRUD\app\Http\Controllers\CrudController;
//// VALIDATION
//use Backpack\PermissionManager\app\Http\Requests\PermissionCrudRequest as StoreRequest;
//use Backpack\PermissionManager\app\Http\Requests\PermissionCrudRequest as UpdateRequest;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  Spatie\Permission\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
//    public function show($id)
    public function show(Permission $permission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Spatie\Permission\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
//    public function edit($id)
    public function edit(Permission $permission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Spatie\Permission\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
//    public function update(Request $request, $id)
    public function update(PermissionRequest $request, Permission $permission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Spatie\Permission\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
//    public function destroy($id)
    public function destroy(Permission $permission)
    {
        //
    }
//    public function setup()
//    {
//        $this->crud->setModel(config('laravel-permission.models.permission'));
//        $this->crud->setEntityNameStrings(trans('backpack::permissionmanager.permission_singular'), trans('backpack::permissionmanager.permission_plural'));
//        $this->crud->setRoute(config('backpack.base.route_prefix').'/permission');
//
//        $this->crud->addColumn([
//            'name'  => 'name',
//            'label' => trans('backpack::permissionmanager.name'),
//            'type'  => 'text',
//        ]);
//        $this->crud->addColumn([ // n-n relationship (with pivot table)
//            'label'     => trans('backpack::permissionmanager.roles_have_permission'),
//            'type'      => 'select_multiple',
//            'name'      => 'roles',
//            'entity'    => 'roles',
//            'attribute' => 'name',
//            'model'     => "Backpack\PermissionManager\app\Models\Role",
//            'pivot'     => true,
//        ]);
//
//        $this->crud->addField([
//            'name'  => 'name',
//            'label' => trans('backpack::permissionmanager.name'),
//            'type'  => 'text',
//        ]);
//        $this->crud->addField([
//            'label'     => trans('backpack::permissionmanager.roles'),
//            'type'      => 'checklist',
//            'name'      => 'roles',
//            'entity'    => 'roles',
//            'attribute' => 'name',
//            'model'     => "Backpack\PermissionManager\app\Models\Role",
//            'pivot'     => true,
//        ]);
//
//        if (!config('backpack.permissionmanager.allow_permission_create')) {
//            $this->crud->denyAccess('create');
//        }
//        if (!config('backpack.permissionmanager.allow_permission_update')) {
//            $this->crud->denyAccess('update');
//        }
//        if (!config('backpack.permissionmanager.allow_permission_delete')) {
//            $this->crud->denyAccess('delete');
//        }
//    }
//
//    public function store(StoreRequest $request)
//    {
////        return parent::storeCrud();
//    }
//
//    public function update(UpdateRequest $request)
//    {
////        return parent::updateCrud();
//    }
}
