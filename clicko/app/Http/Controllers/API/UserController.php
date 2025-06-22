<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return User::all(); // JSON
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        try {
            $user = User::create($request->all());
            return response()->json($user, 201);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Failed to create user',
                'details' => env('APP_DEBUG') ? $e->getMessage() : null,
            ], 500);
        }
    }

    public function show(User $user)
    {
        return response()->json($user);
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name'  => 'sometimes|string|max:255',
            'email' => 'sometimes|string|email:rfc,dns|max:255|unique:users,email,' . $user->id,
        ]);

        try {
            $user->update($request->all());
            return response()->json($user);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Failed to update user',
                'details' => env('APP_DEBUG') ? $e->getMessage() : null,
            ], 500);
        }
    }

    public function destroy(User $user)
    {
        $user->delete();
        return response()->json(null, 204);
    }

    public function topDomains()
    {
        $domains = User::all()
            ->groupBy(function ($user) {
                return explode('@', $user->email)[1]; 
            })
            ->map->count()
            ->sortDesc()
            ->take(3);

        return response()->json($domains);
    }
}
