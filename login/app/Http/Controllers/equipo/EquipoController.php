<?php

namespace App\Http\Controllers\Equipo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Equipo;
use App\Models\Localidad;


class EquipoController extends Controller
{

    public function index(){
        $equipos=Equipo::with('localidad')->get();
        return view('modules.equipo.index',compact('equipos'));
    }

    public function create(){
        $equipos = Localidad::all();
        return view('modules.equipo.create', compact('equipos'));
    }

    public function store(Request $request){
        $equipos = Equipo::create($request->all());
        return redirect()->route('equipo.index');

    }

    public function show($id){
        $equipos=Equipo::find($id);
        return view('modules.equipo.show', compact('equipos'));
    }

    public function edit($id){
        $equipos=Equipo::find($id);
        $localidades = Localidad::all();
        return view('modules.equipo.edit', compact('equipos', 'localidades'));
    }


    public function destroy($id){
        $equipos = Equipo::find($id)->delete();
        return redirect()->route('equipo.index');
    }

    public function update(Request $request, $id){
        $equipo = Equipo::find($id)->update($request->all());
        return redirect()->route('equipo.show', $id);
    }
}
