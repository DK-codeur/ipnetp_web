@extends('layouts.master')

@section('title', 'Ajouter Nouveau Membre du Jury')

@section('content')

<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title">Ajouter nouveau membre du Jury</h4>
                    </div>

                    <div class="col-sm-6">
                        <a href="{{route('jury.index')}}"><button type="button" class="btn btn-primary btn-sm waves-effect waves-light"><span>
                            <i class="far fa-save"></i></span> Liste des membres du Jury</button>
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
                            <form action="{{route('jury.store')}}" method="POST" enctype="multipart/form-data" class="validation-wizard wizard-circle m-t-40">
                                {{ csrf_field() }}
                                <section>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="wfirstName2"> Nom : <span class="text-danger">*</span> </label>
                                                <input type="text" class="form-control required" id="wfirstName2" name="nom" value="{{old('name')}}">
                                                {!! $errors->first('nom', '<small id="helpId" class="text-danger">:message</small>') !!}
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="wlastName2">Prénoms : <span class="danger">*</span> </label>
                                                <input type="text" class="form-control required" id="wlastName2" name="prenoms" value="{{old('prenoms')}}">
                                                {!! $errors->first('prenoms', '<small id="helpId" class="text-danger">:message</small>') !!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="wemail"> Numéro <span class="danger">*</span> </label>
                                                <input type="number" class="form-control required" id="wemailAddress2" name="numero" value="{{old('numero')}}">
                                                {!! $errors->first('numero', '<small id="helpId" class="text-danger">:message</small>') !!}
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="wemail"> email <span class="danger">*</span> </label>
                                                <input type="email" class="form-control required" id="wemailAddress2" name="email" value="{{old('email')}}">
                                                {!! $errors->first('email', '<small id="helpId" class="text-danger">:message</small>') !!}
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="wemail"> Photo <span class="danger">*</span> </label>
                                                <input type="file" class="form-control required" id="wemailAddress2" name="photo">
                                                {!! $errors->first('photo', '<small id="helpId" class="text-danger">:message</small>') !!}
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
