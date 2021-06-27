@extends('layouts.master')

@section('title', 'Liste des Membre du Jury')

@section('content')

<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-10">
                        <h4 class="page-title">Equipe Pedagogique</h4>
                    </div>
                    <div class="col-sm-2">
                        <a href="{{route('equipe-pedago.create')}}"><button type="button" class="btn btn-primary btn-sm waves-effect waves-light"><span>
                            <i class="far fa-save"></i></span> Ajouter un Nouveau Membre</button>
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
                            <th>Numero</th>
                            <th>Email</th>
                            <th>Actions</th>

                        </tr>
                    </thead>


                    <tbody>

                        @foreach ($equipePedagos as $equipePedago)

                        <tr>
                            <td><img src="{{asset('photo/'.$equipePedago->photo)}}" alt="photo"  height="25"></td>
                            <td>{{$equipePedago->name}}</td>
                            <td>{{$equipePedago->prenoms}}</td>
                            <td>{{$equipePedago->numero}}</td>
                            <td>{{$equipePedago->email}}</td>
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


