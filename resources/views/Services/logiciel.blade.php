@extends('master')

@section('content')

    <!--page header section start-->
    <section class="call-to-action ptb-100 gradient-overly-bottom" style="background: url({{asset('img/ithrytec/img3.png')}})no-repeat center center / cover fixed">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 col-lg-12">
                    <div class="page-header-content text-white text-center">
                        <h1 class="text-white mb-2 text-center">Développement de logiciels</h1>
                        <hr style="width:10%;height:3px;margin-top:15px;background-color: #005cbf;border-radius:1px">
                        <p class="lead text-center">Conseil en logiciels, Développement de logiciels personnalisés, Integration de solutions ERP . </p>

                        <a class="btn outline-white-btn animated-btn " href="#" target="_blank">
                            Demander un Devis
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--page header section end-->

    <!--start and transfer section start-->
    <section class="start-transfer ptb-100 gray-light-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading text-center mb-5">
                        <h2 style="color:#302e69;">LabTec</h2>
                        <p class="lead">Obtenez des solutions sur mesure livrées rapidement et à un prix abordable avec nos
                            services de développement de logiciels personnalisés.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--start and transfer section end-->

    <!--buttons section start-->
    <section class="ptb-100 gradient-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading mb-5 text-white">
                        <h5 class="text-white">Nos services</h5>
                        <hr style="width:10%;height:2px;margin-top:10px;background-color: #005cbf;border-radius:1px;margin-left:0px">
                        <p class="lead"> Du conseil au développement, en passant par l'intégration et la maintenance, nous avons ce
                            quil vous faut.
                        </p>
                        <li><b style="color:#0e6bff">☑ </b>Conseil en logiciels</li>
                        <li><b style="color:#0e6bff">☑ </b>Développement de logiciels personnalisés</li>
                        <li><b style="color:#0e6bff">☑ </b>Développement et intégration de solutions ERP</li>
                        <li><b style="color:#0e6bff">☑ </b>Développement d'applications sur cloud</li>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--buttons section end-->

    <!--start and transfer section start-->
    <section class="start-transfer ptb-100 gray-light-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-10">
                    <div class="single-service-plane text-center rounded white-bg shadow-sm p-5 mt-md-4 mt-lg-4">
                        <img src="{{asset('img/ithrytec/log1.png')}}" alt="shared hosting" class="img-fluid mb-4" width="45" />
                        <div class="service-plane-content">
                            <h3 class="h5" style="color:#302e69;">Développement Full Stack</h3>
                            <p>LabTec propose des services de développement web full-stack incluant tous types d'applications
                                (solutions desktop, web ou mobile), consiste en un développement transversal à tout la stack
                                technologique, services front-end et back-end inclus.</p>
                        </div>
                        {{--<div class="action-wrap mt-3">
                            <p>Starting at: <strong>$2.59/mo</strong></p>
                        </div>--}}
                    </div>
                </div>
                <div class="col-md-10 col-lg-10">
                    <div class="single-service-plane text-center rounded white-bg shadow-sm p-5 mt-md-4 mt-lg-4">
                        <img src="{{asset('img/ithrytec/log2.png')}}" alt="shared hosting" class="img-fluid mb-4" width="45" />
                        <div class="service-plane-content">
                            <h3 class="h5" style="color:#302e69;">Développement de logiciels sur mesure</h3>
                            <p>Obtenez des solutions sur mesure livrées rapidement et à moindre coût avec LabTec. Nous développons
                                des logiciels personnalisés, mettons à jour les logiciels existants et intégrons de nouveaux systèmes et
                                applications. Du conseil au développement, en passant par l'intégration et la maintenance, nous avons ce
                                qu'il vous faut.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-10 col-lg-10">
                    <div class="single-service-plane text-center rounded white-bg shadow-sm p-5 mt-md-4 mt-lg-4">
                        <img src="{{asset('img/ithrytec/log3.png')}}" alt="shared hosting" class="img-fluid mb-4" width="45" />
                        <div class="service-plane-content">
                            <h3 class="h5" style="color:#302e69;">Développement et intégration de solutions ERP</h3>
                            <p>LabTec vous aide à intégrer une solution ERP qui partage les données transactionnelles provenant de
                                plusieurs sources et garantit l'intégrité de vos données avec une source unique sur tous vos systèmes.<br> Avec
                                une solution ERP personnalisée, vous pouvez améliorer la gestion des activités commerciales quotidiennes
                                de votre entreprise, telles que : Comptabilité, Achats et approvisionnement, Gestion de projet, Opérations
                                de la chaîne logistique.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-10 col-lg-10">
                    <div class="single-service-plane text-center rounded white-bg shadow-sm p-5 mt-md-4 mt-lg-4">
                        <img src="{{asset('img/ithrytec/log4.png')}}" alt="shared hosting" class="img-fluid mb-4" width="45" />
                        <div class="service-plane-content">
                            <h3 class="h5" style="color:#302e69;">Développement d'applications et logiciels sur cloud</h3>
                            <p>
                                L'informatique basée sur le cloud domine le monde numérique aujourd'hui, LabTec vous aide à intégrer
                                les opérations de votre entreprise dans l'environnement informatique moderne.<br>
                                Le développement d'applications cloud diffère de celui des applications traditionnel et offre de nombreux avantages,
                                notamment : Temps de développement plus courts, Opportunités de déploiement plus rapides, Mise à jour
                                et maintenance plus faciles, Gestion et surveillance hors site, Mises à niveau de sécurité continues.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-10 col-lg-10">
                    <div class="single-service-plane text-center rounded white-bg shadow-sm p-5 mt-md-4 mt-lg-4">
                        <img src="{{asset('img/ithrytec/log5.png')}}" alt="shared hosting" class="img-fluid mb-4" width="45" />
                        <div class="service-plane-content">
                            <h3 class="h5" style="color:#302e69;">Développement d'applications en mode SaaS</h3>
                            <p>
                                Les applications SaaS sont de plus en plus répandues car le modèle de paiement permet aux utilisateurs de
                                payer au fur et à mesure pour des applications qui apportent une valeur directe.<br>
                                De nombreuses sociétés de développement d'applications passent à ce modèle plutôt qu'au modèle de licence plus traditionnel, car
                                Il offre la possibilité d'utiliser le produit sans investissement initial massif.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--start and transfer section end-->

    <!--call to action section start-->

    @include('Services.contact')

    <!--call to action section end-->



@endsection

