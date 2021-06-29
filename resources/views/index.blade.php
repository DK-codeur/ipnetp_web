@extends('layouts.master')

@section('title', 'Dashboard')

@section('content')

    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container-fluid">
                <div class="page-title-box">
                    <div class="row align-items-center">
                        <div class="col-sm-10">
                            <h4 class="page-title">Tableau de Bord</h4>
                        </div>
                        <div class="col-sm-2">
                            <a href="{{route('students.create')}}"><button type="button"
                                    class="btn btn-primary btn-sm waves-effect waves-light"><span><i
                                            class="far fa-save"></i></span> Ajouter Un stagiaire</button></a>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- end page-title -->

                <div class="row">

                    <div class="col-sm-6 col-xl-3">
                        <div class="card">
                            <div class="card-heading p-4">
                                <div class="mini-stat-icon float-right">
                                    <i class="mdi mdi-cube-outline bg-primary  text-white"></i>
                                </div>
                                <div>
                                    <h5 class="font-16">Etablissement</h5>
                                </div>
                                <h3 class="mt-4">{{$schools->count()}}</h3>

                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-3">
                        <div class="card">
                            <div class="card-heading p-4">
                                <div class="mini-stat-icon float-right">
                                    <i class="mdi mdi-briefcase-check bg-success text-white"></i>
                                </div>
                                <div>
                                    <h5 class="font-16">Chef Ecole</h5>
                                </div>
                                <h3 class="mt-4">{{$chefSchools->count()}}</h3>


                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-3">
                        <div class="card">
                            <div class="card-heading p-4">
                                <div class="mini-stat-icon float-right">
                                    <i class="mdi mdi-briefcase-check bg-success text-white"></i>
                                </div>
                                <div>
                                    <h5 class="font-16">Equipe de suivie</h5>
                                </div>
                                <h3 class="mt-4">10</h3>


                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-3">
                        <div class="card">
                            <div class="card-heading p-4">
                                <div class="mini-stat-icon float-right">
                                    <i class="mdi mdi-account-multiple bg-danger text-white"></i>
                                </div>
                                <div>
                                    <h5 class="font-16">Stagiaire</h5>
                                </div>
                                <h3 class="mt-4">{{$students->count()}}</h3>


                            </div>
                        </div>
                    </div>

                </div>


                <div class="card-body">
                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>Photo</th>
                                <th>Nom Stagiaire</th>
                                <th>Etablissement</th>
                                <th>Spécialité</th>
                                <th>Matricule</th>
                                <th>Promotion</th>
                                <th>Action</th>

                            </tr>
                        </thead>


                        <tbody>

                            @foreach ($lastStudents as $lastStudent)

                                <tr>
                                    <td><a href="{{route('students.show', $lastStudent)}}"> <img src="{{asset('photo/'.$lastStudent->photo)}}" alt="photo"  height="25"> </a> </td>
                                    <td><a href="{{route('students.show', $lastStudent)}}"> {{$lastStudent->name}} {{$lastStudent->prenoms}} </a> </td>
                                    <td>{{$lastStudent->school->name}}</td>
                                    <td>{{$lastStudent->specialite}}</td>
                                    <td>{{$lastStudent->matricule}}</td>
                                    <td>{{date('Y', strtotime($lastStudent->promotion))}} </td>
                                    {{-- <td>{{$chefSchool->numero}} </td> --}}
                                    <td>
                                        <a href="#" class="btn btn-primary waves-effect waves-light">
                                            <i class="icon-agenda"></i>
                                        </a>

                                        <a href="#" class="btn btn-danger waves-effect waves-light">
                                            <i class="icon-agenda"></i>
                                        </a>

                                    </td>

                                </tr>

                            @endforeach

                        </tbody>
                    </table>



                </div>

            </div>

        </div>
        <div class="modal fade modal-edit-biblio" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title mt-0" id="mySmallModalLabel">Modifier Element</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>


                    </div>
                    <div class="modal-body">
                        <form action="" method="post">
                            <input class="form-control" type="" name="name" id="name" placeholder="Nom"> <br>

                            <select class="form-control">
                                <option>Etablissement</option>
                                <option>CPNTIC</option>
                                <option>ENA</option>
                                <option>DPS</option>
                            </select>
                            <br>
                            <select class="form-control">
                                <option>Spécialité</option>
                                <option>Front</option>
                                <option>Back</option>
                                <option>Web</option>
                            </select>
                            <br>

                            <input class="form-control" type="" name="matricule" id="matricule"
                                placeholder="Matricule"> <br>
                            <div class="row justify-content-center">
                                <button type="submit" class="btn btn-primary btn-block m-3">
                                    Modifier
                                </button>
                            </div>

                        </form>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

    </div>

@stop
