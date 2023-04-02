<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\UserCollection;
use App\Http\Resources\V1\UserResource;
use App\Filters\V1\UserFilter;
use App\Http\Requests\V1\StoreUserRequest;

class UserApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new  UserFilter();

        // get query params follow URL:
        // example -> /api/v1/users?departmentId[eq]=507&name[eq]=Cydney%20Rogahn
        $filterItems = $filter->transform($request); // return [['column','operator','value']]

        if(count($filterItems) == 0){
            // get all users with paging
            return new UserCollection(User::paginate());
        }else{
            // get all users with filter and paging
            $users = User::where($filterItems)->paginate();
            return new UserCollection($users->appends($request->query()));
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        return new UserResource(User::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return new UserResource($user);
        // return $user;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
