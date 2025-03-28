<?php

namespace App\Http\Controllers;

use App\Models\books;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $books['books'] = books::all();
        return view('books.index', $books);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $datos_libro = request()->except('_token');

        if($request->hasFile('foto')){

            $datos_libro['foto'] = $request->file('foto')->store('uploads', 'public');
        }
        books::insert($datos_libro);

        return redirect('books');
    }

    /**
     * Display the specified resource.
     */
    public function show(books $books)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $libro = books::findOrFail($id);
        return view('books.editar', compact('libro'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $datos_libro = request()->except('_token', '_method');

        if($request->hasFile('foto')){

            $datos_libro['foto'] = $request->file('foto')->store('uploads', 'public');
        }

        books::where('id', '=', $id)->update($datos_libro);

        return redirect('books');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        books::destroy($id);
        return redirect('/books');
    }
}
