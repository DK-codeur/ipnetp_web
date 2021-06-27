<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;

class EquipePedagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipePedagos = User::where('role', '=', 'panel')->orderBy('name', 'ASC')->get();
        // dd($chefSchools);
        return view('schools.list-equipe-pedago', compact('equipePedagos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('schools.add-equipe-pedago');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $this->validate($request, [
            'nom' => 'required',
            'prenoms' => 'required',
            'numero' => 'required|digits:10',
            'email' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // dd($request);
        if($request->photo != null) {
            $photoName = $request->nom.'_'.time().'.'.$request->photo->extension();
            $request->photo->move(public_path('photo'), $photoName);
        }

        User::create([
            'name' => $request->nom,
            'prenoms' => $request->prenoms,
            'numero' => $request->numero,
            'email' => $request->email,
            'photo' => $photoName,
            'role' => 'panel',
            'password' => $request->email,
        ]);

        Flashy::success('Membre ajouté avec succès!');
        return redirect()->back();


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
