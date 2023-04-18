@extends('master')

@section('content')

    <!--page header section start-->
    <section class="call-to-action ptb-100 gradient-overly-bottom" style="background: url({{asset('img/ithrytec/img6.jpg')}})no-repeat center center / cover fixed">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 col-lg-12">
                    <div class="page-header-content text-white text-center">
                        <h1 class="text-white mb-2 text-center">Graphisme & Infographie</h1>

                        <hr style="width:10%;height:3px;margin-top:15px;background-color: #005cbf;border-radius:1px">

                        <p class="lead text-center">Conception logo, Identité visuelle, Rapports annuelles, Brochure catalogue...</p>

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
    <section class="start-transfer ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading text-center mb-5">
                        <h5 style="color:#302e69;" >Nos services de conception infographie inclus la livraison de conceptions attrayantes qui répondent aux besoins de votre entreprise et améliorer votre marque.
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--start and transfer section start-->
    <section class="start-transfer ptb-100 gray-light-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-12">
                    <div class="section-heading text-center mb-5">
                        <h4 style="color: #302e69">Nous Experts intervenants dans les domaines suivants :</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <div class="single-service-plane text-center rounded white-bg shadow-sm p-5 mt-md-4 mt-lg-4">
                        <img src="{{asset('img/ithrytec/info1.png')}}" alt="shared hosting" class="img-fluid mb-4" width="45" />
                        <div class="service-plane-content">
                            <h3 class="h5" style="color:#302e69;">Conception logo</h3>
                            <p>Le logo est le visage de votre marque. Nous avons des designers
                                de logo talentueux et expérimentés. Nous avons conçu des logos
                                et des identités de marque pour de nombreuses entreprises et
                                c'est quelque chose dans lequel nous sommes bons.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="single-service-plane text-center rounded white-bg shadow-sm p-5 mt-md-4 mt-lg-4">
                        <img src="{{asset('img/ithrytec/info2.png')}}" alt="shared hosting" class="img-fluid mb-4" width="45" />
                        <div class="service-plane-content">
                            <h3 class="h5" style="color:#302e69;">Conception Identité visuelle</h3>
                            <p>Nous proposons une gamme complète de services de
                                conception d'identité de marque, de conception de papeterie, de
                                rebranding d'entreprise et de brand guidelines services. Définir
                                l'identité de votre marque est la clé du marketing.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="single-service-plane text-center rounded white-bg shadow-sm p-5 mt-md-4 mt-lg-4">
                        <img src="{{asset('img/ithrytec/info3.png')}}" alt="shared hosting" class="img-fluid mb-4" width="45" />
                        <div class="service-plane-content">
                            <h3 class="h5" style="color:#302e69;">Conception Rapports annuels</h3>
                            <p>Pour obtenir une excellente conception de rapport annuel, il faut
                                une combinaison de rapports financiers clairs, d'infographies
                                intéressantes, d'une structure de contenu concise et d'une
                                impression de haute qualité. Nous faisons tout cela.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="single-service-plane text-center rounded white-bg shadow-sm p-5 mt-md-4 mt-lg-4">
                        <img src="{{asset('img/ithrytec/info4.png')}}" alt="shared hosting" class="img-fluid mb-4" width="45" />
                        <div class="service-plane-content">
                            <h3 class="h5" style="color:#302e69;">Print design</h3>
                            <p>Votre matériel marketing imprimé peut avoir un impact
                                significatif sur limage de votre entreprise. Nous fournissons des
                                services de conception de qualité pour nous assurer que vos
                                brochures, catalogues et autres supports marketing se
                                démarquent lors de chaque réunion de vente.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--start and transfer section end-->

    <!--client section start-->
    <section class="client-section ptb-100 ">
        <div class="container">
            <!--clients logo start-->
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="section-heading text-center mb-5">
                        <h2 style="color: #252459">Nos outils</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="overlay-opacity-gradient"></div>
                    <div class="owl-carousel owl-theme clients-carousel dot-indicator">
                        <div class="item single-client">
                            <img src="{{asset('img/ithrytec/1.png')}}" alt="client logo" class="img-fluid client-img">
                        </div>
                        <div class="item single-client">
                            <img src="{{asset('img/ithrytec/2.png')}}" alt="client logo" class="img-fluid client-img">
                        </div>
                        <div class="item single-client">
                            <img src="{{asset('img/ithrytec/3.png')}}" alt="client logo" class="img-fluid client-img">
                        </div>
                        <div class="item single-client">
                            <img src="{{asset('img/ithrytec/4.png')}}" alt="client logo" class="img-fluid client-img">
                        </div>
                        <div class="item single-client">
                            <img src="{{asset('img/ithrytec/5.png')}}" alt="client logo" class="img-fluid client-img">
                        </div>
                        <div class="item single-client">
                            <img src="{{asset('img/ithrytec/6.png')}}" alt="client logo" class="img-fluid client-img">
                        </div>
                    </div>
                </div>
            </div>
            <!--clients logo end-->
        </div>
    </section>
    <!--client section start-->

    <!--call to action section start-->

    @include('Services.contact')

    <!--call to action section end-->



@endsection
