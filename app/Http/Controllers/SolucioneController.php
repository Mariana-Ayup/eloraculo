<?php

namespace App\Http\Controllers;

use App\Models\Solucione;
use Illuminate\Http\Request;

/**
 * Class SolucioneController
 * @package App\Http\Controllers
 */
class SolucioneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $soluciones = Solucione::paginate();

        return view('solucione.index', compact('soluciones'))
            ->with('i', (request()->input('page', 1) - 1) * $soluciones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $solucione = new Solucione();
        return view('solucione.create', compact('solucione'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Solucione::$rules);

        $solucione = Solucione::create($request->all());

        return redirect()->route('soluciones.index')
            ->with('success', 'Solucione created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $solucione = Solucione::find($id);

        return view('solucione.show', compact('solucione'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $solucione = Solucione::find($id);

        return view('solucione.edit', compact('solucione'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Solucione $solucione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Solucione $solucione)
    {
        request()->validate(Solucione::$rules);

        $solucione->update($request->all());

        return redirect()->route('soluciones.index')
            ->with('success', 'Solucione updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $solucione = Solucione::find($id)->delete();

        return redirect()->route('soluciones.index')
            ->with('success', 'Solucione deleted successfully');
    }
}
