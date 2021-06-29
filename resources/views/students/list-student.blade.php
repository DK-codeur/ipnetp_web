@extends('layouts.master')

@section('title', 'Liste des Stagiares')

@section('content')

    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container-fluid">
                <div class="page-title-box">
                    <div class="row align-items-center">
                        <div class="col-sm-10">
                            <h4 class="page-title">Liste des stagiaires</h4>
                        </div>
                        <div class="col-sm-2">
                            <a href="{{route('students.create')}}"><button type="button" class="btn btn-primary btn-sm waves-effect waves-light"><span>
                                <i class="far fa-save"></i></span> Ajouter un stagiaire</button>
                            </a>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- end page-title -->
                <div class="card-body">
                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>Photo</th>
                                <th>Nom</th>
                                <th>Prenoms</th>
                                <th>Matricule</th>
                                <th>Etablissement</th>
                                <th>Specialite</th>
                                <th>Numero</th>
                                <th>Email</th>
                                <th>Promotion</th>
                                <th>Actions</th>

                            </tr>
                        </thead>


                        <tbody>

                            @foreach ($students as $student)

                            <tr>
                                <td> <a href="{{route('students.show', $student)}}"> <img src="{{asset('photo/'.$student->photo)}}" alt="photo"  height="25"> </a>  </td>
                                <td> <a href="{{route('students.show', $student)}}"> {{ucfirst($student->name)}} </a> </td>
                                <td>{{$student->prenoms}} </td>
                                <td>{{$student->matricule}} </td>
                                <td>{{$student->school->name}} </td>
                                <td>{{$student->specialite}} </td>
                                <td>{{$student->numero}} </td>
                                <td>{{$student->email}} </td>
                                <td>{{date('Y', strtotime($student->promotion))}} </td>
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
