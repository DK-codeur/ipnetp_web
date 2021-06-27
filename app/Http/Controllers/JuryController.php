<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;

class JuryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jurys = User::where('role', '=', 'jury')->orderBy('name', 'ASC')->get();
        // dd($chefSchools);
        return view('schools.list-jury', compact('jurys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('schools.add-jury');
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
            'role' => 'jury',
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
