


@extends('layouts.master')

@section('title', 'profile stagiaire')

@section('content')


<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">
            <div class="page-title-box">
                <div class="row justify-content-between">
                    <div class="col-sm-4">
                        <div class="card p-4">
                            <h4 class="page-title" style="font-weight: bold;">Nom : {{ucfirst($student->name)}}</h4>
                            <h5 class="page-title">Prenom : {{$student->prenoms}}</h4>
                                <h6>Matricule: {{$student->matricule}}</h6>
                                <h6>Email: {{$student->email}}</h6>
                                <h6>Spécialité: {{$student->specialite}}</h6>
                                <h6>Matricule: {{$student->matricule}}</h6>
                                <h6 style="color: red;">Promotion: {{date('Y', strtotime($student->promotion))}}</h6>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="card p-4">
                            <img class="rounded" src="{{asset('photo/'.$student->photo)}}" alt="image" >
                        </div>
                    </div>
                </div>

                <!-- end row -->
            </div>
            <!-- end page-title -->

            <hr>
            <br>

            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-9">
                        <h4 class="page-title">Tableau des notes</h4>
                    </div>


                </div>
            </div>


            <div class="row">

                <div class="col-xl-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-pills nav-justified" role="tablist">
                                <li class="nav-item waves-effect waves-light">
                                    <a class="nav-link active" data-toggle="tab" href="#home-1" role="tab">
                                        <span class="d-none d-md-block">Chef d'Etablissement</span><span
                                            class="d-block d-md-none"><i
                                                class="mdi mdi-home-variant h5"></i></span>
                                    </a>
                                </li>
                                <li class="nav-item waves-effect waves-light">
                                    <a class="nav-link" data-toggle="tab" href="#profile-1" role="tab">
                                        <span class="d-none d-md-block">Equipe de suivi Pedagogique</span><span
                                            class="d-block d-md-none"><i class="mdi mdi-account h5"></i></span>
                                    </a>
                                </li>
                                <li class="nav-item waves-effect waves-light">
                                    <a class="nav-link" data-toggle="tab" href="#messages-1" role="tab">
                                        <span class="d-none d-md-block">Jury</span><span
                                            class="d-block d-md-none"><i class="mdi mdi-email h5"></i></span>
                                    </a>
                                </li>
                                <li class="nav-item waves-effect waves-light">
                                    <a class="nav-link" data-toggle="tab" href="#settings-1" role="tab">
                                        <span class="d-none d-md-block">Total</span><span
                                            class="d-block d-md-none"><i class="mdi mdi-settings h5"></i></span>
                                    </a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active p-3" id="home-1" role="tabpanel">
                                    <div class="card-body">
                                        <div class="card-body">
                                            <table id="datatable-buttons"
                                                class="table table-striped table-bordered dt-responsive nowrap"
                                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th>Items</th>
                                                        <th>Coef</th>
                                                        <th>Note/20</th>
                                                        <!-- <th>Action</th> -->
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Compétences Professionnelles</td>
                                                        <td>5 </td>
                                                        <td>10</td>
                                                    </tr>
                                                        <!--  -->
                                                        <tr>
                                                            <td>Qualité scientifique des préparations</td>
                                                            <td>5 </td>
                                                            <td>15</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Ponctualité/Assiduité</td>
                                                            <td>2 </td>
                                                            <td>5</td>
                                                        </tr>                                                            <tr>
                                                            <td>Discipline</td>
                                                            <td>2 </td>
                                                            <td>10</td>
                                                        </tr>                                                            <tr>
                                                            <td>Animation d'équipe</td>
                                                            <td>4 </td>
                                                            <td>15</td>
                                                        </tr>                                                            <tr>
                                                            <td>Capacité d'adaptation/initiative</td>
                                                            <td>4 </td>
                                                            <td>10</td>
                                                        </tr>                                                            <tr>
                                                            <td>Realtions avec les supérieurs hiérachiques</td>
                                                            <td>3</td>
                                                            <td>5</td>
                                                        </tr>                                                            <tr>
                                                            <td>Relatiions Humaines (paires et élèves)</td>
                                                            <td>3</td>
                                                            <td>10</td>
                                                        </tr>                                                            <tr>
                                                            <td>Tenue et Présentation</td>
                                                            <td>2</td>
                                                            <td>10</td>
                                                        </tr>

                                                        <tr>
                                                            <tr>
                                                            <td>Total</td>
                                                            <td>20</td>
                                                            <td>50</td>
                                                        </tr>
                                                         <tr>
                                                        <td>Moyenne/20</td>
                                                        <td></td>
                                                        <td>13</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>

                                    </div>
                                </div>
                                <div class="tab-pane p-3" id="profile-1" role="tabpanel">
                                    <div class="card-body">
                                        <div class="card-body">
                                            <h4 style="text-transform: uppercase;font-weight: bold; font-size: 13px;">Animation</h4>
                                            <table id="datatable-buttons"
                                                class="table table-striped table-bordered dt-responsive nowrap"
                                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th>Items</th>
                                                        <th>Coef</th>
                                                        <th>Note/20</th>
                                                        <!-- <th>Action</th> -->
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Motivation</td>
                                                        <td>2 </td>
                                                        <td>10</td>
                                                    </tr>
                                                        <!--  -->
                                                        <tr>
                                                            <td>Expression</td>
                                                            <td>2 </td>
                                                            <td>15</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Maitrise du contenu</td>
                                                            <td>6 </td>
                                                            <td>5</td>
                                                        </tr>                                                            <tr>
                                                            <td>Strategie utilisée</td>
                                                            <td>5 </td>
                                                            <td>10</td>
                                                        </tr>                                                            <tr>
                                                            <td>Exploitation des supports</td>
                                                            <td>2 </td>
                                                            <td>15</td>
                                                        </tr>                                                            <tr>
                                                            <td>Conduite de l'evaluation</td>
                                                            <td>2 </td>
                                                            <td>10</td>
                                                        </tr>                                                            <tr>
                                                            <td>Gestion du Temps</td>
                                                            <td>1</td>
                                                            <td>5</td>
                                                        </tr>

                                                        <tr>
                                                            <td>Total</td>
                                                            <td>20</td>
                                                            <td>50</td>
                                                        </tr>
                                                    </tr>                                                            <tr>
                                                        <td>Moyenne/20</td>
                                                        <td></td>
                                                        <td>13</td>
                                                    </tr>

                                                </tbody>
                                            </table>



                                        </div>

                                    </div>
                                    <div class="card-body">
                                        <div class="card-body">
                                            <h4 style="text-transform: uppercase;font-weight: bold; font-size: 13px;">Entretien</h4>

                                            <table id="datatable-buttons"
                                                class="table table-striped table-bordered dt-responsive nowrap"
                                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th>Items</th>
                                                        <th>Coef</th>
                                                        <th>Note/20</th>
                                                        <!-- <th>Action</th> -->
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Structure de l'autocritique</td>
                                                        <td>6 </td>
                                                        <td>10</td>
                                                    </tr>
                                                        <!--  -->
                                                        <tr>
                                                            <td>Approfondissement du contenu</td>
                                                            <td>6 </td>
                                                            <td>15</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Qualité des réponses liées aux stratégies</td>
                                                            <td>3 </td>
                                                            <td>5</td>
                                                        </tr>                                                            <tr>
                                                            <td>Attitude face aux observations</td>
                                                            <td>5 </td>
                                                            <td>10</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Total</td>
                                                            <td>20</td>
                                                            <td>50</td>
                                                        </tr>
                                                    </tr>                                                            <tr>
                                                        <td>Moyenne/20</td>
                                                        <td></td>
                                                        <td>13</td>
                                                    </tr>

                                                </tbody>
                                            </table>



                                        </div>

                                    </div>
                                    <div class="card-body">
                                        <div class="card-body">
                                            <h4 style="text-transform: uppercase;font-weight: bold; font-size: 13px;">Préparation</h4>

                                            <table id="datatable-buttons"
                                                class="table table-striped table-bordered dt-responsive nowrap"
                                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th>Items</th>
                                                        <th>Coef</th>
                                                        <th>Note/20</th>
                                                        <!-- <th>Action</th> -->
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Compétences Professionnelles</td>
                                                        <td>5 </td>
                                                        <td>10</td>
                                                    </tr>
                                                        <!--  -->
                                                        <tr>
                                                            <td>Qualité scientifique des préparations</td>
                                                            <td>5 </td>
                                                            <td>15</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Ponctualité/Assiduité</td>
                                                            <td>2 </td>
                                                            <td>5</td>
                                                        </tr>                                                            <tr>
                                                            <td>Discipline</td>
                                                            <td>2 </td>
                                                            <td>10</td>
                                                        </tr>                                                            <tr>
                                                            <td>Animation d'équipe</td>
                                                            <td>4 </td>
                                                            <td>15</td>
                                                        </tr>                                                            <tr>
                                                            <td>Capacité d'adaptation/initiative</td>
                                                            <td>4 </td>
                                                            <td>10</td>
                                                        </tr>                                                            <tr>
                                                            <td>Realtions avec les supérieurs hiérachiques</td>
                                                            <td>3</td>
                                                            <td>5</td>
                                                        </tr>                                                            <tr>
                                                            <td>Relatiions Humaines (paires et élèves)</td>
                                                            <td>3</td>
                                                            <td>10</td>
                                                        </tr>                                                            <tr>
                                                            <td>Tenue et Présentation</td>
                                                            <td>2</td>
                                                            <td>10</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Total</td>
                                                            <td>30</td>
                                                            <td>105</td>
                                                        </tr>
                                                    </tr>                                                            <tr>
                                                        <td>Moyenne/20</td>
                                                        <td></td>
                                                        <td>13</td>
                                                    </tr>

                                                </tbody>
                                            </table>



                                        </div>

                                    </div>

                                </div>
                                <div class="tab-pane p-3" id="messages-1" role="tabpanel">
                                    <div class="card-body">
                                        <div class="card-body">
                                            <h4 style="text-transform: uppercase;font-weight: bold; font-size: 13px;">Préparation</h4>

                                            <table id="datatable-buttons"
                                                class="table table-striped table-bordered dt-responsive nowrap"
                                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th>Items</th>
                                                        <th>Coef</th>
                                                        <th>Note/20</th>
                                                        <!-- <th>Action</th> -->
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Interêt du contenu</td>
                                                        <td>2 </td>
                                                        <td>10</td>
                                                    </tr>
                                                        <!--  -->
                                                        <tr>
                                                            <td>Decoupage de l'OI</td>
                                                            <td>2 </td>
                                                            <td>15</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Situation d'apprentissage</td>
                                                            <td>2 </td>
                                                            <td>5</td>
                                                        </tr>                                                            <tr>
                                                            <td>Titre des OP evaluations sommatives</td>
                                                            <td>4 </td>
                                                            <td>10</td>
                                                        </tr>                                                            <tr>
                                                            <td>Contenu</td>
                                                            <td>5 </td>
                                                            <td>15</td>
                                                        </tr>                                                            <tr>
                                                            <td>Evaluation Sommative</td>
                                                            <td>3 </td>
                                                            <td>10</td>
                                                        </tr>                                                            <tr>
                                                            <td>Soutenance</td>
                                                            <td>2</td>
                                                            <td>5</td>
                                                        </tr>

                                                    </tr>                                                            <tr>
                                                        <td>Total</td>
                                                        <td>20</td>
                                                        <td>50</td>
                                                    </tr>
                                                </tr>                                                            <tr>
                                                    <td>Moyenne/20</td>
                                                    <td></td>
                                                    <td>13</td>
                                                </tr>
                                                </tbody>
                                            </table>



                                        </div>

                                    </div>
                                </div>
                                <div class="tab-pane p-3" id="settings-1" role="tabpanel">
                                    <div class="card-body">
                                        <div class="card-body">
                                            <h4 style="text-transform: uppercase;font-weight: bold; font-size: 13px;">Préparation</h4>

                                            <table id="datatable-buttons"
                                                class="table table-striped table-bordered dt-responsive nowrap"
                                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th>Items</th>
                                                        <th>Coef</th>
                                                        <th>Note/20</th>
                                                        <!-- <th>Action</th> -->
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Chef d'etablissement</td>
                                                        <td>30 </td>
                                                        <td>10</td>
                                                    </tr>
                                                        <!--  -->

                                                        <tr>
                                                            <td>Equipe Pedagogique</td>
                                                            <td>10</td>
                                                            <td>105</td>
                                                        </tr>
                                                    </tr>                                                            <tr>
                                                        <td>Jury</td>
                                                        <td>20</td>
                                                        <td>13</td>
                                                    </tr>

                                                </tbody>
                                            </table>



                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>



        </div>
        <!-- container-fluid -->

    </div>
    <!-- content -->


    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="mySmallModalLabel"></h5>Ajouter depense</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <input class="form-control" type="number" name="depense" id="depense"
                            placeholder="Ajouter la dépense">

                        <div class="row justify-content-center">
                            <button type="submit" class="btn btn-primary mt-4">
                                Ajouter
                            </button>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


</div>



@stop

