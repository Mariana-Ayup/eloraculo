<?php

namespace App\Http\Controllers;

use App\Models\Problema;
use Illuminate\Http\Request;

/**
 * Class ProblemaController
 * @package App\Http\Controllers
 */
class AlumnosProblemaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $problemas = Problema::paginate();

        return view('alumnoproblema.index', compact('problemas'))
            ->with('i', (request()->input('page', 1) - 1) * $problemas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
 
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $problema = Problema::find($id);

        return view('alumnoproblema.show', compact('problema'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Problema $problema
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Problema $problema)
    {
 
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {

    }
}
