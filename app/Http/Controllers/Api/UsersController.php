<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\MyController;

use Log;
use App\User;
use Illuminate\Http\Request;
use App\Traits\ResponseReturn;
use App\Http\Requests\UserRequest;
use App\Http\Resources\UserResource;
use App\Http\Resources\UserCollectionResource;


class UsersController extends MyController
{

    use ResponseReturn;
    /**
     * Function index
     * Returns all users paginate results
     */
    public function index(Request $request)
    {
        $orderBy = $request->order_by ?? 'id';

        $users = User::orderBy($orderBy)->paginate(10);

        return new UserCollectionResource($users);
    }

    /**
     * Function store
     * Params: name, email, password required
     * Adds a new User
     */
    public function store(UserRequest $request)
    {

        if (User::where('email',$request->email)->exists()) {
            return $this->_returnError('This email already exists in the database.');
        }
        User::create($request->all());
        return $this->_returnSuccess('User added.');
    }

    /**
     * Function show
     * Params: $id
     * Returns a single user
     */
    public function show($id)
    {
        if (!$user = User::find($id)) {
            return $this->_returnError('Item not found.');
        }

        return response([
            'data' => new UserResource($user),
            'status' => 'success',
        ]);
    }

    /**
     * Function update
     * Params: $id, Request
     * Updates a movie
     */
    public function update(UserRequest $request, $id)
    {
        if (!$users = User::find($id)) {
            return $this->_returnError('User not found.');
        }

        print_r($request->all());
        return;

        $users->update($request->all());

        return $this->_returnSuccess('User updated.');
    }

    /**
     * Function destroy
     * Params: $id
     * Deletes a user
     */
    public function destroy($id)
    {

        if ($id < 3 ) {
            return $this->_returnError('You cannot remove these users.');
        }

        if (!$user = User::find($id)) {
            return $this->_returnError('Item not found.');
        }

        $user->delete();

        return $this->_returnSuccess('User deleted.');
    }


}
