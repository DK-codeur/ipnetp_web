@extends('layouts.master')

@section('title', 'Ajouter Nouvel Etablissement')

@section('content')

<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title">Ajouter un etablissement</h4>
                    </div>

                    <div class="col-sm-2">
                        <a href="{{route('schools.index')}}"><button type="button" class="btn btn-primary btn-sm waves-effect waves-light"><span>
                            <i class="far fa-save"></i></span>Liste des Etablissements</button>
                        </a>
                    </div>

                </div>
                <!-- end row -->
            </div>
            <!-- end page-title -->
            <!-- end row -->
            <div class="card-body">

                <div class="col-12">
                    <div class="card">
                        <div class="card-body wizard-content">
                            <form action="{{route('schools.store')}}" method="POST" enctype="multipart/form-data" class="validation-wizard wizard-circle m-t-40">
                                {{ csrf_field() }}
                                <section>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="wmatricule"> Nom de l'etablissement <span class="text-danger">*</span> </label>
                                                <input type="text" class="form-control required" id="name" name="name" value="{{old('name')}}">
                                                {!! $errors->first('name', '<small id="helpId" class="text-danger">:message</small>') !!}
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="wemail"> Numéro <span class="text-danger">*</span> </label>
                                                <input type="text" class="form-control required" id="numero" name="numero" value="{{old('numero')}}" max="10">
                                                {!! $errors->first('numero', '<small id="helpId" class="text-danger">:message</small>') !!}

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="wmatricule"> Adresse de l'etablissement <span class="danger">*</span> </label>
                                                <input type="text" class="form-control required" id="adresse" name="adresse" value="{{old('adresse')}}">
                                                {!! $errors->first('adresse', '<small id="helpId" class="text-danger">:message</small>') !!}

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="wemail"> email <span class="danger">*</span> </label>
                                                <input type="email" class="form-control required" id="email" name="email" value="{{old('email')}}">
                                                {!! $errors->first('email', '<small id="helpId" class="text-danger">:message</small>') !!}

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="wemail"> Logo <span class="danger">*</span> </label>
                                                <input type="file" class="form-control required" id="logo" name="logo">
                                                {!! $errors->first('logo', '<small id="helpId" class="text-danger">:message</small>') !!}

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="wemail"> Chef  <span class="danger">*</span>
                                                </label>
                                                <select class="form-control" name="chefSchool_id">
                                                    <option value="">--Choisir--</option>
                                                    @foreach ($chefSchools as $chefSchool)
                                                        <option value="{{$chefSchool->id}}">{{$chefSchool->name}} {{$chefSchool->prenoms}}</option>
                                                    @endforeach

                                                </select>
                                                {!! $errors->first('chefSchool_id', '<small id="helpId" class="text-danger">:message</small>') !!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 text-center">
                                        <button type="submit" class="btn btn-outline-primary">Enregistrer</button>
                                    </div>
                                </section>


                            </form>
                        </div>
                    </div>
                </div>


            </div>

        </div>
        <!-- container-fluid -->

    </div>
    <!-- content -->

</div>

@stop
