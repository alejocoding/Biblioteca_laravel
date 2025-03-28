<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\estado;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        //
        $Users['Users'] = User::all();
        return view('User.index', $Users);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $estados = estado::skip(2)->take(2)->get();
        return view('User.create', compact('estados'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $usuario = request()->except('_token');
        User::create($usuario);

        return $usuario;

    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
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
