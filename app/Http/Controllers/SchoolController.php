<?php

namespace App\Http\Controllers;

use App\Models\ChefSchools;
use App\Models\Schools;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use MercurySeries\Flashy\Flashy;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schools = Schools::orderBy('name', 'ASC')->get();
        // dd($schools);
        return view('schools.list-school', compact('schools'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $chefSchools = User::where('role', '=', 'chief')->orderBy('name', 'ASC')->get();

        return view('schools.add-school', compact('chefSchools'));
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
            'name' => 'required',
            'numero' => 'required|digits:10',
            'adresse' => 'required',
            'email' => 'required',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'chefSchool_id' => 'required|unique:schools,user_id'
        ]);

        // dd($request);
        if($request->logo != null) {
            $logoName = $request->name.'_'.time().'.'.$request->logo->extension();
            $request->logo->move(public_path('logo'), $logoName);
        }

        Schools::create([
            'name' => $request->name,
            'numero' => $request->numero,
            'adresse' => $request->adresse,
            'email' => $request->email,
            'logo' => $logoName,
            'user_id' => $request->chefSchool_id,
        ]);

        Flashy::success('Etablissement ajouté avec succès!');
        return redirect()->route('schools.create');

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
