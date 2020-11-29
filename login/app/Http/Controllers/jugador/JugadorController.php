<?php

namespace App\Http\Controllers\Jugador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jugador;
use App\Models\Equipo;

class JugadorController extends Controller
{
    public function index(){

        $jugadores=Jugador::with('equipos')->get();
        return view('modules.jugador.index',compact('jugadores'));


    }

    public function create(){
        $jugadores = Equipo::all();
        return view('modules.jugador.create', compact('jugadores'));

    }


    public function store(Request $request){
        $jugadores = Jugador::create($request->all());
        return redirect()->route('jugador.index');

    }

    public function show($id){
        $jugador = Jugador::find($id);
        return view('modules.jugador.show', compact('jugador'));
    }


    public function edit($id){
        $equipos = Equipo::all();
        $jugadores = Jugador::find($id);
        return view('modules.jugador.edit', compact('jugadores', 'equipos'));
    }


    public function destroy($id){
        $jugadores = Jugador::find($id)->delete();
        return redirect()->route('jugador.index');
    }

    public function update(Request $request, $id){
        $jugador = Jugador::find($id)->update($request->all());
        return redirect()->route('jugador.show', $id);
    }
}
