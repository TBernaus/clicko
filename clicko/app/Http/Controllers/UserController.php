<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    public function topDomains()
    {
        $domains = User::all()
            ->groupBy(fn($user) => explode('@', $user->email)[1])
            ->map->count()
            ->sortDesc()
            ->take(3);

        return view('users.top-domains', ['domains' => $domains]);
    }
}
