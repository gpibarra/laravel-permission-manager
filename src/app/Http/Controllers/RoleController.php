<?php

namespace gpibarra\LaravelPermissionManager\app\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

//use Backpack\CRUD\app\Http\Controllers\CrudController;
//// VALIDATION
//use Backpack\PermissionManager\app\Http\Requests\RoleCrudRequest as StoreRequest;
//use Backpack\PermissionManager\app\Http\Requests\RoleCrudRequest as UpdateRequest;

class RoleController extends Controller
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
     * @param  Spatie\Permission\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
//    public function show($id)
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Spatie\Permission\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
//    public function edit($id)
    public function edit(Role $role)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Spatie\Permission\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
//    public function update(Request $request, $id)
    public function update(Request $request, Role $role)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Spatie\Permission\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
//    public function destroy($id)
    public function destroy(Role $role)
    {
        //
    }
//    public function setup()
//    {
//        $this->crud->setModel(config('laravel-permission.models.role'));
//        $this->crud->setEntityNameStrings(trans('backpack::permissionmanager.role'), trans('backpack::permissionmanager.roles'));
//        $this->crud->setRoute(config('backpack.base.route_prefix').'/role');
//
//        $this->crud->setColumns([
//            [
//                'name'  => 'name',
//                'label' => trans('backpack::permissionmanager.name'),
//                'type'  => 'text',
//            ],
//            [
//                // n-n relationship (with pivot table)
//                'label'     => ucfirst(trans('backpack::permissionmanager.permission_plural')),
//                'type'      => 'select_multiple',
//                'name'      => 'permissions', // the method that defines the relationship in your Model
//                'entity'    => 'permissions', // the method that defines the relationship in your Model
//                'attribute' => 'name', // foreign key attribute that is shown to user
//                'model'     => "Backpack\PermissionManager\app\Models\Permission", // foreign key model
//                'pivot'     => true, // on create&update, do you need to add/delete pivot table entries?
//            ],
//        ]);
//
//        $this->crud->addField([
//            'name'  => 'name',
//            'label' => trans('backpack::permissionmanager.name'),
//            'type'  => 'text',
//        ]);
//        $this->crud->addField([
//            'label'     => ucfirst(trans('backpack::permissionmanager.permission_plural')),
//            'type'      => 'checklist',
//            'name'      => 'permissions',
//            'entity'    => 'permissions',
//            'attribute' => 'name',
//            'model'     => "Backpack\PermissionManager\app\Models\Permission",
//            'pivot'     => true,
//        ]);
//
//        if (config('backpack.permissionmanager.allow_role_create') == false) {
//            $this->crud->denyAccess('create');
//        }
//        if (config('backpack.permissionmanager.allow_role_update') == false) {
//            $this->crud->denyAccess('update');
//        }
//        if (config('backpack.permissionmanager.allow_role_delete') == false) {
//            $this->crud->denyAccess('delete');
//        }
//    }
//
//    public function store(StoreRequest $request)
//    {
////        //otherwise, changes won't have effect
////        \Cache::forget('spatie.permission.cache');
////
////        return parent::storeCrud();
//    }
//
//    public function update(UpdateRequest $request)
//    {
////        //otherwise, changes won't have effect
////        \Cache::forget('spatie.permission.cache');
////
////        return parent::updateCrud();
//    }
}
