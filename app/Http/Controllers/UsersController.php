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
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors(),
            ], 401);
        }
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $input['status'] = true;
        $input['is_active'] = true;
        $user = User::create($input);
        $success['token'] = $user->createToken('appToken')->accessToken;
        $event = "register";
        $createdAt = date("l jS \of F Y h:i:s A");
        return response()->json([
            'success' => true,
            'access_token' => $success,
            'user' => $user,
            'event' => $event,
            'created_at' => $createdAt
        ]);
    }



    public function find(Request $request)
    {
        $user = User::with(['favorites.restaurant'])->where('id', $request->user()->id)->get();
        return response(['data' => $user, 'message' => 'Found user data successfully', 'status' => true]);
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
