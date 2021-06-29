<?php

namespace App\Http\Controllers;

use App\Models\Schools;
use App\Models\Students;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Students::orderBy('name', 'ASC')->get();
        return view('students.list-student', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $schools = Schools::orderBy('name', 'ASC')->get();
        return view('students.add-student', compact('schools'));
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
            'prenoms' => 'required',
            'matricule' => 'required',
            'schoolId' => 'required',
            'specialite' => 'required',
            'numero' => 'required|digits:10',
            'email' => 'required',
            'promotion' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // dd($request);
        if($request->photo != null) {
            $photoName = $request->name.'_'.time().'.'.$request->photo->extension();
            $request->photo->move(public_path('photo'), $photoName);
        }

        Students::create([
            'name' => $request->name,
            'prenoms' => $request->prenoms,
            'matricule' => $request->matricule,
            'school_id' => $request->schoolId,
            'specialite' => $request->specialite,
            'numero' => $request->numero,
            'email' => $request->email,
            'promotion' => $request->promotion,
            'photo' => $photoName,
        ]);

        Flashy::success('Stagiaire ajouté avec succès!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Students $student)
    {
        return view('students.student-profile', compact('student'));
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
