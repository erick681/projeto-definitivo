<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Boi;
use Illuminate\Http\Request;

class BoiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bois = Boi::all();
        return view('bois.index')->with('bois',$bois);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bois.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Boi::create($input);
        return redirect('student')->with('flash_message','Bovino removido');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $boi = Boi::find($id);
        return view('bois.show')->with('bois',$boi);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $boi = Boi::find($id);
        return view('bois.edit')->with('bois',$boi);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Boi::find($id);
        $input=$request->all();
        $bois->update($input);
        return redirect('bois')->with('flash_mesage','dados do bovino atualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Boi::destroy($id);
        return redirect('boi')->with('flash_mesage','bovino deletado');
    }
}
