<!--main header menu start-->
<div id="logoAndNav" class="main-header-menu-wrap bg-transparent">
    <div class="container">
        <nav class="js-mega-menu navbar navbar-expand-md header-nav">

            <!--logo start-->
            <a class="navbar-brand" href="{{route('home')}}"><img src="{{asset('img/ithrytec/ithrytec_logo1.png')}}" width="120" alt="logo" class="img-fluid" /></a>
            <!--logo end-->

            <!--responsive toggle button start-->
            <button type="button" class="navbar-toggler btn" aria-expanded="false" aria-controls="navBar" data-toggle="collapse" data-target="#navBar">
                        <span id="hamburgerTrigger">
                          <span class="fas fa-bars"></span>
                        </span>
            </button>
            <!--responsive toggle button end-->

            <!--main menu start-->
            <div id="navBar" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto main-navbar-nav">
                    <li class="nav-item submenu-item is_active_nav_link" data-position="left" id="home_nav">
                        <a class="nav-link custom-nav-link" href="{{route('home')}}" aria-haspopup="true" aria-expanded="false">Accueil</a>
                    </li>
                    <!--home end-->

                    <!--pages start-->
                    <li class="nav-item submenu-item" id="main_nav">
                        <a class="nav-link custom-nav-link is_active_nav_link" href="{{route('about')}}" aria-haspopup="true" aria-expanded="false" aria-labelledby="pagesSubMenu">À propos</a>
                    </li>


                    <!--hosting start-->
                    <li class="nav-item hs-has-mega-menu custom-nav-item" data-max-width="720px" data-position="right">
                        <a id="hostingMegaMenu" class="nav-link custom-nav-link main-link-toggle" href="JavaScript:Void(0);" aria-haspopup="true" aria-expanded="false">Services</a>

                        <!-- Demos - Mega Menu -->
                        <div class="hs-mega-menu w-100 main-sub-menu" aria-labelledby="hostingMegaMenu">
                            <div class="row no-gutters">
                                <div class="col-md-6">
                                    <div class="title-with-icon-item">
                                        <a class="title-with-icon-link" href="{{route('services.conseil')}}">
                                            <div class="media">
                                                <div class="media-body">
                                                    <span class="u-header__promo-title">Conseil & Accompagnement</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="title-with-icon-item">
                                        <a class="title-with-icon-link" href="{{route('services.transformation')}}">
                                            <div class="media">
                                                <div class="media-body">
                                                    <span class="u-header__promo-title">Transformation digitale</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="title-with-icon-item">
                                        <a class="title-with-icon-link" href="{{route('services.logiciel')}}">
                                            <div class="media">
                                                <div class="media-body">
                                                    <span class="u-header__promo-title">Développement de logiciels</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <div class="title-with-icon-item">
                                        <a class="title-with-icon-link" href="{{route('services.web')}}">
                                            <div class="media">
                                                <div class="media-body">
                                                    <span class="u-header__promo-title">Développement Web</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="title-with-icon-item">
                                        <a class="title-with-icon-link" href="{{route('services.digital')}}">
                                            <div class="media">
                                                <div class="media-body">
                                                    <span class="u-header__promo-title">Stratégies digitale</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="title-with-icon-item">
                                        <a class="title-with-icon-link" href="{{route('services.infographe')}}">
                                            <div class="media">
                                                <div class="media-body">
                                                    <span class="u-header__promo-title">Graphisme & Infographie</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- End Demos - Mega Menu -->
                    </li>
                    <!--hosting end-->

                    <!--support start-->
                    <li class="nav-item hs-has-mega-menu custom-nav-item" data-max-width="360px" data-position="right">
                        <a id="supportMegaMenu" class="nav-link custom-nav-link main-link-toggle" href="JavaScript:Void(0);" aria-haspopup="true" aria-expanded="false">Solutions</a>
                        <!--support submenu start-->
                        <div class="hs-mega-menu main-sub-menu" aria-labelledby="supportMegaMenu" style="min-width: 330px;">
                            <div class="title-with-icon-item">
                                <a class="title-with-icon-link" href="https://demo.pylcom.app/" target="_blank">
                                    <div class="media">
                                        <div class="media-body">
                                            <span class="u-header__promo-title">Solution de gestion commerciale</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            {{--<div class="title-with-icon-item">
                                <a class="title-with-icon-link" href="shared-hosting.html">
                                    <div class="media">
                                        <div class="media-body">
                                            <span class="u-header__promo-title">Solution de gestion de la relation client</span>
                                        </div>
                                    </div>
                                </a>
                            </div>--}}
                            <div class="title-with-icon-item">
                                <a class="title-with-icon-link" href="{{route('solutions.erp')}}">
                                    <div class="media">
                                        <div class="media-body">
                                            <span class="u-header__promo-title">ERP-Progicielde gestion intégré</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="title-with-icon-item">
                                <a class="title-with-icon-link" href="{{route('solutions.billets')}}">
                                    <div class="media">
                                        <div class="media-body">
                                            <span class="u-header__promo-title">Solution de gestion des billets</span>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>
                        <!--support submenu end-->
                    </li>
                    <!--support end-->

                    <li class="nav-item submenu-item" id="main_nav">
                        <a class="nav-link custom-nav-link is_active_nav_link" href="{{route('contact')}}" aria-haspopup="true" aria-expanded="false" aria-labelledby="pagesSubMenu">Contacts</a>
                    </li>


                    <!--button start-->
                    <li class="nav-item header-nav-last-item d-flex align-items-center">
                        <a class="btn outline-white-btn animated-btn" href="{{route('rendez-vous')}}">
                            PLANIFIER UN RENDEZ-VOUS
                        </a>
                    </li>
                    <!--button end-->
                </ul>
            </div>
            <!--main menu end-->
        </nav>
    </div>
</div>
<!--main header menu end-->
