<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use Illuminate\Http\Request;

class wargaController extends Controller
{
    //
    public function index(){
        $warga = Warga::all();
        return view('warga.index', compact(['warga']));
    }

    public function create(){
        return view('warga.create');
    }

    public function store(Request $request){
        // dd($request->except(['_token', 'submit', '_method']));
        Warga::create($request->except(['_token', 'submit', '_method']));
        return redirect('/warga');
    }

    public function edit($id){
        $warga = Warga::find($id);
        // dd($warga);
        return view('warga.edit', compact(['warga']));
        
    }

    public function update($id, Request $request){
        // dd($request->except(['_token', 'submit', '_method']));
        $warga = Warga::find($id);
        $warga->update($request->except(['_token', 'submit', '_method']));
        return redirect('/warga');
    }

    public function destroy($id){
        $warga = Warga::find($id);
        $warga->delete();
        return redirect('/warga');
    }
}
