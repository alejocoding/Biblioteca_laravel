<?php

namespace App\Http\Controllers;

use App\Models\prestamos;
use Illuminate\Http\Request;

class PrestamosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('Prestamo.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Prestamo.create');
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
    public function show(prestamos $prestamos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(prestamos $prestamos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, prestamos $prestamos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(prestamos $prestamos)
    {
        //
    }
}
