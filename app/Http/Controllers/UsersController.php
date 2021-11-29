<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Resources\UsersResource;
use App\Models\Role;
use Illuminate\Support\Str;
use App\Models\Checkout;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = $request->user();

        // if user->role is less than 3 run this else unauthorized user
        if($user->role_id < 3) {
        return UsersResource::collection(User::all());
        } else {
            return 'user not authorized';
        }
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
        $user_role = $request->user();
        // if user->role is less than 3 run this else unauthorized user
        if ($user_role->role_id < 3) {
        $faker = \Faker\Factory::create(1);
        $user = User::create([
            'name' => $faker->name,
            'email' => $faker->unique()->safeEmail,
            'password' => $faker->password,
            'remember_token' => Str::random(10)
        ]);

        return new UsersResource($user);
        } else {
            return 'user not authorized';
        }
    }

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
