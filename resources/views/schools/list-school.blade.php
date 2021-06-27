@extends('layouts.master')

@section('title', 'Liste des etablissements')

@section('content')

<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-10">
                        <h4 class="page-title">Liste des Etablissements</h4>
                    </div>
                    <div class="col-sm-2">
                        <a href="{{route('schools.create')}}"><button type="button" class="btn btn-primary btn-sm waves-effect waves-light"><span>
                            <i class="far fa-save"></i></span> Ajouter un Etablissement</button>
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
                            <th>Logo</th>
                            <th>Nom etablissement</th>
                            <th>Adresse</th>
                            <th>Numéro</th>
                            <th>Email</th>
                            <th>Chef</th>
                            <th>Actions</th>
                        </tr>
                    </thead>


                    <tbody>
                        @foreach ($schools as $school)

                            <tr>
                                <td scope="row"> <img src="{{asset('logo/'.$school->logo)}}" alt="image" height="20"> </td>
                                <td>{{$school->name}} </td>
                                <td>{{$school->adresse}} </td>
                                <td>{{$school->numero}} </td>
                                <td>{{$school->email}} </td>
                                <td>{{$school->user->name}}</td>
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

</div>

@stop


