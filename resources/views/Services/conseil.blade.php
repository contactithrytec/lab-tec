@extends('master')

@section('content')

    <!--page header section start-->
    <section class="call-to-action ptb-100 gradient-overly-bottom" style="background: url({{asset('img/ithrytec/img1.jpg')}})no-repeat center center / cover fixed">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 col-lg-12">
                    <div class="page-header-content text-white text-center">
                        <h1 class="text-white mb-2 text-center">Conseil & Accompagnement</h1>

                        <hr style="width:10%;height:3px;margin-top:15px;background-color: #005cbf;border-radius:1px">

                        <p class="lead text-center">Conseil, Pilotage,Projet IT, Transformation, Audit IT, Optimisation, Formation...</p>

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
                        <p class="lead">spécialisé dans le digital et l'innovation, met à votre disposition SON expérience pour vous conseiller et vous accompagner dans l'intégralité de vos projets digitaux.</p>
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
                    <div class="section-heading text-center mb-5 text-white">
                        <h2 class="text-white">LabTec</h2>
                        <p class="lead"> vous apporte ses conseils et son expertise dans le
                            digital et vous propose un accompagnement 100%
                            personnalisé concernant vos stratégies et vos performances en
                            lien étroit avec le digital.
                            <br>
                            Nous sommes à vos cotés pour vous aider à définir vos
                            objectifs en termes de stratégie digitale et de transformation
                            digitale.</p>
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
                <div class="col-md-12 col-lg-12">
                    <div class="section-heading text-center mb-5">
                        <h5 style="color: #302e69">Nous Experts intervenants dans les domaines suivants :</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <div class="single-service-plane text-center rounded white-bg shadow-sm p-5 mt-md-4 mt-lg-4">
                        <img src="{{asset('img/ithrytec/con1.png')}}" alt="shared hosting" class="img-fluid mb-4" width="45" />
                        <div class="service-plane-content">
                            <h3 class="h5" style="color:#302e69;">Conseil & mise place des solutions IT</h3>
                            <p>LabTec aide les organisations de différentes échelles et structures à sélectionner et à
                                mettre en œuvre de nouvelles technologies pour rester compétitives et répondre aux
                                exigences des marchés modernes.</p>
                            <br>
                            <ul class="order_list list-unstyled mb-4 pricing-feature-list">
                                <li><b>● </b>Assistance au déploiement des solutions technologiques</li>
                                <li><b>● </b>Accompagner la conduite du changement au sein de vos organisations</li>
                                <li><b>● </b>Formation des utilisateurs</li>
                            </ul>
                        </div>
                        {{--<div class="action-wrap mt-3">
                            <p>Starting at: <strong>$2.59/mo</strong></p>
                        </div>--}}
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="single-service-plane text-center rounded white-bg shadow-sm p-5 mt-md-4 mt-lg-4">
                        <img src="{{asset('img/ithrytec/con2.png')}}" alt="shared hosting" class="img-fluid mb-4" width="45" />
                        <div class="service-plane-content">
                            <h3 class="h5" style="color:#302e69;">Accompagnement Transformation digitale</h3>
                            <p>LabTec vous apporte ses conseils et son expertise en transformation digitale et vous
                                propose un accompagnement 100% personnalisé dans la transformation digitale et
                                l'intégration des nouvelles technologies.
                            </p>
                            <ul class="order_list list-unstyled mb-4 pricing-feature-list">
                                <li><b>● </b>Audit ot étude</li>
                                <li><b>● </b>Transition technologique</li>
                                <li><b>● </b>Digitalisation des processus</li>
                                <li><b>● </b>Mise en place d'outils productifs</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="single-service-plane text-center rounded white-bg shadow-sm p-5 mt-md-4 mt-lg-4">
                        <img src="{{asset('img/ithrytec/con3.png')}}" alt="shared hosting" class="img-fluid mb-4" width="45" />
                        <div class="service-plane-content">
                            <h3 class="h5" style="color:#302e69;">Développement informatique</h3>
                            <p>Développement de solutions personnalisées, pour augmenter l'efficacité et assurer
                                une meilleure expérience utilisateur.</p>
                            <br>
                            <ul class="order_list list-unstyled mb-4 pricing-feature-list">
                                <li><b>● </b>Développement de site web</li>
                                <li><b>● </b>Développement Application mobile</li>
                                <li><b>● </b>Développement de logiciels sur mesure</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="single-service-plane text-center rounded white-bg shadow-sm p-5 mt-md-4 mt-lg-4">
                        <img src="{{asset('img/ithrytec/con4.png')}}" alt="shared hosting" class="img-fluid mb-4" width="45" />
                        <div class="service-plane-content">
                            <h3 class="h5" style="color:#302e69;">Formation et transformation de compétences</h3>
                            <p>Nos solutions ont pour but principal de vous accompagner dans la transformation
                                digitale de votre entreprise.<br> Nos experts vont donc former vos employés et votre
                                personnel à l'utilisation des différentes solutions afin qu'il soit particulièrement
                                opérationnel.<br> Grâce à nos formations et accompagnement votre personnel pourra
                                digitaliser ses compétences de manière à être aussi productif dans le domaine digital.</p>

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
