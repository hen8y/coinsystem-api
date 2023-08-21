<?php

namespace App\Http\Controllers\Api\v1;
use App\Http\Controllers\Controller;
use App\Http\Requests\v1\StoreUserRequest;
use App\Http\Requests\v1\UpdateUserRequest;
use App\Http\Resources\v1\UserResource;
use App\Http\Resources\v1\UserCollection;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return new UserCollection(User::paginate());

        // $filter = search('Search',fn(string $request) => strlen($request) > 0 ? User::where('firstName', 'like', "%{$request}%")->pluck('name', 'id') : []);
    }

    public function show(User $user){
        return new UserResource($user);
    }

    public function store(StoreUserRequest $request){
        return new UserResource(User::create($request->all()));
    }
    public function update(UpdateUserRequest $request, User $user){
        $user->update($request->all());
    }


}
