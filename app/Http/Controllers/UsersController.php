<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Resources\UsersResource;
use App\Models\Role;
use Illuminate\Support\Str;
use App\Models\Checkout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function register(Request $request)
    {
    }

    public function find(Request $request)
    {
        $data['user_data'] = $request->user();
        return response(['data'=>$data, 'message' => 'Found user data successfully', 'status' => true]);
    }

    /**    * Log a User out    *    * @param \Illuminate\Http\Request $request    * @return \Illuminate\Http\Response    */
    public function logout(Request $request)
    {
        if (Auth::check()) {
            $request->user()->token()->revoke();
            return response()->json(['success' => 'logout success'], 200);
        } else {
            return response()->json(['error' => 'something went wrong'], 500);
        }
    }

    public function index(Request $request)
    {

        return UsersResource::collection(User::all());
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
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, User $user)
    {
        $user_role = $request->user();
        // if user->role is less than 3 run this else unauthorized user
        if ($user_role->role_id < 3) {
            return new UsersResource($user);
        } else {
            return 'user not authorized';
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {

        $user_role = $request->user();
        // if user->role is less than 3 run this else unauthorized user
        if ($user_role->role_id < 3) {
            $user->update([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => $request->input('password')
            ]);
        } else {
            return 'user not authorized';
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, User $user)
    {
        $user_role = $request->user();
        // if user->role is less than 3 run this else unauthorized user
        if ($user_role->role_id === 1) {
            $user->delete();
            return response(null, 204);
        } else {
            return 'user not authorized';
        }
    }
}
