<?php

namespace App\Http\Controllers\Localidad;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Localidad;

class LocalidadController extends Controller
{
    public function index(){
        $localidades = Localidad::all();
        return view('modules.localidad.index',compact('localidades'));
    }

    public function create(){
        return view('modules.localidad.create');
    }

    public function show($id){
        // SELECT * FROM entity WHERE ID = ? 111  FIND
        $localidades=Localidad::find($id);
        return view('modules.localidad.show',compact('localidades'));
    }


    public function store(Request $request){
        $localidades = Localidad::create($request->all());
        return redirect()->route('localidad.index');
    }

    public function destroy($id){
        $localidades = Localidad::find($id)->delete();
        return redirect()->route('modules.localidad.index');
    }

    public function edit($id){
        $localidades = Localidad::find($id);
        return view('modules.localidad.edit', compact('localidades'));
    }

    public function update(Request $request, $id){
        $localidades = Localidad::find($id)->update($request->all());
        return redirect()->route('localidad.index');
    }
}
