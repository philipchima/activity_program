<?php

namespace App\Http\Controllers\Api\V1;

use App\Filters\V1\DepartmentFilter;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\DepartmentCollection;
use App\Http\Resources\V1\DepartmentResource;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new  DepartmentFilter();

        // get query params follow URL:
        // example -> /api/v1/users?departmentId[eq]=507&name[eq]=Cydney%20Rogahn
        $filterItems = $filter->transform($request); // return [['column','operator','value']]

        if(count($filterItems) == 0){
            // get all users with paging
            return new DepartmentCollection(Department::paginate());
        }else{
            // get all users with filter and paging
            $departments = Department::where($filterItems)->paginate();
            return new DepartmentCollection($departments->appends($request->query()));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Department $department)
    {
        //
        return new DepartmentResource($department);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Department $department)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Department $department)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Department $department)
    {
        //
    }
}
