<div class="left side-menu">
    <div class="slimscroll-menu" id="remove-scroll">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu" id="side-menu">
                <li class="menu-title">Menu</li>
                <li>
                    <a href="{{route('home_path')}}" class="waves-effect">
                        <i class="icon-accelerator"></i><span> Tableau de Bord
                        </span>
                    </a>
                </li>

                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i
                            class="icon-agenda"></i><span>Etablissement <span class="float-right menu-arrow"><i
                                    class="mdi mdi-chevron-right"></i></span> </span></a>
                    <ul class="submenu">
                        <li><a href="{{route('chefSchools.index')}}">Chefs etablissements</a></li>
                        <li><a href="{{route('schools.create')}}">Ajouter un Etablissement</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{route('students.index')}}" class="waves-effect">
                        <i class='fas fa-user-friends' style="font-size: 18px;"></i> <span> Stagiaire </span>
                    </a>

                </li>
                <li>
                    <a href="{{route('equipe-pedago.index')}}" class="waves-effect">
                        <i class='fas fa-user-friends' style="font-size: 18px;"></i> <span> Equipe de suivie </span>
                    </a>

                </li>

                <!-- <li>
                    <a href="facturation.html" class="waves-effect"><i class="icon-diamond"></i> <span>
                            Facturations</span> </a>

                </li> -->
                <li>
                    <a href="{{route('jury.index')}}" class="waves-effect">
                        <i class="fas fa-money-check-alt"></i><span> Jury </span>
                    </a>
                </li>




            </ul>

        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
