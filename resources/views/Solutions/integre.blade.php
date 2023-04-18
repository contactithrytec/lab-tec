@extends('master')

@section('content')

    <!--entete start-->
    <section class="hero-equal-height  pb-100 gradient-overlay" style="background: url('{{asset('img/hero-11.jpg')}}no-repeat center center / cover')">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 col-12">
                    <div class="hero-content-wrap text-white">
                        <p style="color: #005cbf"><b>LabTec PARTENAIRE ODOO</b></p>
                        <h2 class="text-white">Simplifiez La gestion de votre
                            entreprise avec Odoo ERP
                            Logiciel d</h2>
                        <p class="text-white">La seule plateforme dont vous aurez besoin pour gérer votre
                            entreprise: des applications intégrées, simples et appréciées
                            par des millions d'utilisateurs satisfaits.
                        </p>
                        {{-- <p class="lead">Globally parallel task granular alignments through excellent intellectual capital. Globally deploy vertical leadership.</p>
                        <ul class="list-unstyled">
                            <li class="py-1">
                                <div class="d-flex align-items-center">
                                    <span class="ti-check mr-2"></span>
                                    <p class="mb-0">Easy to use no technical skills required</p>
                                </div>
                            </li>
                            <li class="py-1">
                                <div class="d-flex align-items-center">
                                    <span class="ti-check mr-2"></span>
                                    <p class="mb-0">Thousands of customizable design</p>
                                </div>
                            </li>
                            <li class="py-1">
                                <div class="d-flex align-items-center">
                                    <span class="ti-check mr-2"></span>
                                    <p class="mb-0">Zero-Risk Money-Back Guarantee</p>
                                </div>
                            </li>
                            <li class="py-1">
                                <div class="d-flex align-items-center">
                                    <span class="ti-check mr-2"></span>
                                    <p class="mb-0">Free domain with install</p>
                                </div>
                            </li>
                        </ul>--}}
                        <div class="action-btns mt-4">
                            <a href="{{route('contact')}}" class="btn outline-white-btn animated-btn">Contacter Nous</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="embed-responsive embed-responsive-16by9">
                        {{--  <img src="assets/img/private-cloud-server.svg" alt="wp hosting" class="img-fluid" />
                          <img src="assets/img/wordpress-logo.svg" alt="wp hosting" width="100" class="animation-icon-img animation-icon-5" />--}}
                        <iframe class="bg-primary" width="500" style="background-color: rebeccapurple" height="315"src="https://www.youtube.com/embed/y7TlnAv6cto" frameborder="0" allowfullscreen></iframe>
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- entete end-->

    <!--erp start-->
    <section class="ptb-100 start-transfer">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-12">
                    <div class="section-heading mb-5 text-white">
                        <h5 style="color:#302e69;">Odoo ERP</h5>
                        <hr style="width:10%;height:2px;margin-top:10px;background-color: #005cbf;border-radius:1px;margin-left:0px">
                        <p style="color:#302e69;"><b>Odoo</b> est une suite d'applications open source couvrant tous
                            les besoins de votre entreprise: CRM, Commerce, Comptabilité,
                            Inventaire, Point de Vente, Gestion de Projet, etc.<br><br>
                            <b>Odoo</b> est entièrement personnalisable et s'adapte
                            parfaitement à toutes sortes de structures. L'intégration de cet
                            ERP apporte une base de données unique à toute l'entreprise COMPTABILITÉ
                            l'information est partagée et mise à jour en temps réel.
                        </p>
                    </div>
                </div>
                <div class="col-lg-5 col-12">
                    <div class="hero-image mt-5">
                        <img src="{{asset('img/ithrytec/erp.png')}}" alt="wp hosting" class="hero-shape-img img-fluid" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--erp end-->

    <section class="hero-equal-height  pb-100 gradient-overlay">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading text-center mb-5">
                        <p style="color: #005cbf"><b>LabTec PARTENAIRE ODOO</b></p>
                        <h3 class="text-white">LabTec, Intégrateur Odoo en Algérie </h3>
                        <p class="text-white">LabTec est spécialisée dans l'intégration et le déploiement de l'ERP Odoo ainsi que les technologies qui y
                            sont liées. L'équipe LabTec vous assure un accompagnement durant tout le processus afin de garantir
                            une implémentation efficace.<b> Nous intégrons, développons et configurons votre solution Open Soure
                            LabTec</b> met à votre disposition son savoir-faire afin de réaliser et réussir vos projets.</p>
                        <div class="action-btns mt-3">
                            <a href="{{route('contact')}}"class="btn primary-solid-btn">Contactez-nous</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--solution start-->
    <section class="start-transfer ptb-100 gray-light-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-12">
                    <div class="section-heading text-center mb-5">
                        <p style="color: #005cbf"><b>LES SOLUTIONS ODOO</b></p>
                        <h4 style="color: #302e69">Odoo est disponible
                            en trois versions
                        </h4>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="section-heading text-center mb-5">
                        <h5 style="color: #302e69" >↯</h5>
                        <h6 style="color: #302e69">Odoo Online</h6>
                        <p style="color: #302e69">La version cloud (Saas) offrant une
                            solution out-of-the-box et rapide
                            d'implémentation idéale pour les PME
                            de moins de 50 utilisateurs.</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="section-heading text-center mb-5">
                        <h5 style="color: #302e69" >↯</h5>
                        <h6 style="color: #302e69">Odoo Enterprise</h6>
                        <p style="color: #302e69">La solution déployée sur site (installée
                            localement) qui est recommandée
                            pour les entreprise avec plus de 50
                            utilisateurs</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="section-heading text-center mb-5">
                        <h5 style="color: #302e69" >↯</h5>
                        <h6 style="color: #302e69">Odoo Community</h6>
                        <p style="color: #302e69">la version open source, téléchargeable
                            et entièrement gratuite.</p>
                    </div>
                </div>
                <div class="col-md-12 col-lg-12">
                    <div class="section-heading text-center mb-5">
                        <p style="color: #005cbf"><b>FONCTIONNALITÉS</b></p>
                        <h4 style="color: #302e69">
                            ODOO Applications
                        </h4>
                        <p style="color:#302e69;">Odoo propose un ERP de gestion commerciale tout-en-un et personnalisable. I permet
                            de couvrir toutes les fonctions clés des entreprises grâce à ses différents modules :</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-lg-3">
                    <div class="single-service-plane text-center rounded white-bg shadow-sm p-5 mt-md-4 mt-lg-4">
                        <img src="{{asset('img/ithrytec/erp1.png')}}" alt="shared hosting" class="img-fluid mb-4 " width="50px"/>
                        <div class="service-plane-content">
                            <h3 class="h5" style="color:#302e69;">VENTES</h3>
                            <p>CRM, Gestion des ventes, Point de
                                Vente, Abonnements, Location
                            </p>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="single-service-plane text-center rounded white-bg shadow-sm p-5 mt-md-4 mt-lg-4">
                        <img src="{{asset('img/ithrytec/erp2.png')}}" alt="shared hosting" class="img-fluid mb-4" width="50px"/>
                        <div class="service-plane-content">
                            <h3 class="h5" style="color:#302e69;">FINANCE</h3>
                            <p>Comptabilité, Facturation, Notes de
                                frais, Feuille de calculs, Documents,
                                Signature
                            </p>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="single-service-plane text-center rounded white-bg shadow-sm p-5 mt-md-4 mt-lg-4">
                        <img src="{{asset('img/ithrytec/erp3.png')}}" alt="shared hosting" class="img-fluid mb-4" width="50px"/>
                        <div class="service-plane-content">
                            <h3 class="h5" style="color:#302e69;">MARKETING</h3>
                            <p>Marketing social, Email Marketing, SMS
                                Marketing, Événements,
                                Automatisation du Marketing,
                                sondages</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="single-service-plane text-center rounded white-bg shadow-sm p-5 mt-md-4 mt-lg-4">
                        <img src="{{asset('img/ithrytec/erp4.png')}}" alt="shared hosting" class="img-fluid mb-4" width="50px"/>
                        <div class="service-plane-content">
                            <h3 class="h5" style="color:#302e69;">SERVICES</h3>
                            <p>Gestion des projets, Feuille de
                                présence, Services sur Site, Assistance,
                                Planification, Rendez-vous
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="single-service-plane text-center rounded white-bg shadow-sm p-5 mt-md-4 mt-lg-4">
                        <img src="{{asset('img/ithrytec/erp5.png')}}" alt="shared hosting" class="img-fluid mb-4" width="50px"/>
                        <div class="service-plane-content">
                            <h3 class="h5" style="color:#302e69;">PRODUCTIVITE</h3>
                            <p>Discussion, Validations, Internet des
                                Objets, VoIP
                            </p>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="single-service-plane text-center rounded white-bg shadow-sm p-5 mt-md-4 mt-lg-4">
                        <img src="{{asset('img/ithrytec/erp6.png')}}" alt="shared hosting" class="img-fluid mb-4" width="50px"/>
                        <div class="service-plane-content">
                            <h3 class="h5" style="color:#302e69;">Ressources Humaines</h3>
                            <p>Employés, Recrutement, Congés,
                                Évaluations, Recommandations, Parc
                                Automobile
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="single-service-plane text-center rounded white-bg shadow-sm p-5 mt-md-4 mt-lg-4">
                        <img src="{{asset('img/ithrytec/erp7.png')}}" alt="shared hosting" class="img-fluid mb-4" width="50px"/>
                        <div class="service-plane-content">
                            <h3 class="h5" style="color:#302e69;">SITE WEB</h3>
                            <p>site Web, ecommerce, Blogs, Forum,
                                Chat en ligne, eLearning
                            </p>
                            <br>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="single-service-plane text-center rounded white-bg shadow-sm p-5 mt-md-4 mt-lg-4">
                        <img src="{{asset('img/ithrytec/erp8.png')}}" alt="shared hosting" class="img-fluid mb-4" width="50px"/>
                        <div class="service-plane-content">
                            <h3 class="h5" style="color:#302e69;">Inventaire & MRP</h3>
                            <p>Inventaire, Fabrication, PLM, Achats,
                                Maintenance, Qualité
                            </p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-md-12 col-lg-12">
                    <div class="section-heading text-center mb-5">
                        <p style="color: #005cbf"><b>LES ETAPES CLES</b></p>
                        <h4 style="color: #302e69">Notre approche</h4>
                    </div>
                </div>
                <div class="col-md-2 col-lg-2">
                    <img src="{{asset('img/ithrytec/apr1.png')}}" alt="shared hosting" class="img-fluid mb-4 text-center" width="80px" style="border: 2px solid #302e69;border-radius: 50%;"/>
                    <div class="service-plane-content">
                        <h6 class="h5" style="color:#302e69;">Diagnostique</h6>
                        <p>Analyse des besoins</p>
                    </div>
                </div>
                <div class="col-md-2 col-lg-2">
                    <img src="{{asset('img/ithrytec/trn3.png')}}" alt="shared hosting" class="img-fluid mb-4 text-center" width="80px" style="border: 2px solid #302e69;border-radius: 50%;"/>
                    <div class="service-plane-content">
                        <h6 class="h5" style="color:#302e69;">Intégration</h6>
                        <p>Mise en œuvre du logiciel</p>
                    </div>
                </div>
                <div class="col-md-2 col-lg-2">
                    <img src="{{asset('img/ithrytec/apr3.png')}}" alt="shared hosting" class="img-fluid mb-4 text-center" width="80px" style="border: 2px solid #302e69;border-radius: 50%;"/>
                    <div class="service-plane-content">
                        <h6 class="h5" style="color:#302e69;">Développement spécifiques</h6>
                        <p>Développement de modules, de
                            fonctionnalités.</p>
                    </div>
                </div>
                <div class="col-md-2 col-lg-2">
                    <img src="{{asset('img/ithrytec/apr4.png')}}" alt="shared hosting" class="img-fluid mb-4 text-center" width="80px" style="border: 2px solid #302e69;border-radius: 50%;"/>
                    <div class="service-plane-content">
                        <h6 class="h5" style="color:#302e69;">Formation Odoo</h6>
                        <p>Formation des utilisateurs</p>
                    </div>
                </div>
                <div class="col-md-2 col-lg-2">
                    <img src="{{asset('img/ithrytec/apr5.png')}}" alt="shared hosting" class="img-fluid mb-4 text-center" width="80px" style="border: 2px solid #302e69;border-radius: 50%;"/>
                    <div class="service-plane-content">
                        <h6 class="h5" style="color:#302e69;">Support & Maintenance</h6>
                        <p>Accompagnement des utilisateurs</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--solution end-->


@endsection
