<?php

namespace App\Http\Controllers;

use App\Models\Nota;
use Illuminate\Http\Request;

class NotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $notas = Nota::query()->orderBy('created_at', 'desc')->paginate();
        //dd($notas);
        return view('nota.index', ['notas' => $notas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('nota.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->validate([
            'nota' => ['required', 'string']
        ]);
        $data['user_id'] = 1;
        $nota = Nota::create($data);
        return redirect()->route('nota.show', $nota)->with('message','La nota fue guardada exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Nota $nota)
    {
        //
        return view('nota.show', ['nota' => $nota]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Nota $nota)
    {
        //
        return view('nota.edit', ['nota' => $nota]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Nota $nota)
    {
        //
        $data = $request->validate([
            'nota' => ['required', 'string']
        ]);
        $nota->update($data);
        return redirect()->route('nota.show', $nota)->with('message','La nota fue actualizada exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nota $nota)
    {
        //
        $nota->delete();
        return redirect()->route('nota.index')->with('message','La nota fue eliminada exitosamente');
    }
}
