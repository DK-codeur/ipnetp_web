<?php

namespace App\Http\Controllers;

use App\Models\ChefSchools;
use App\Models\User;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;

class ChefSchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chefSchools = User::where('role', '=', 'chief')->orderBy('name', 'ASC')->get();
        // dd($chefSchools);
        return view('schools.list-chef-school', compact('chefSchools'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('schools.add-chef-school');
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
            'date_service' => 'required',
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
            'date_service' => $request->date_service,
            'role' => 'chief',
            'password' => $request->email,
        ]);

        Flashy::success('Chef ajouté avec succès!');
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
