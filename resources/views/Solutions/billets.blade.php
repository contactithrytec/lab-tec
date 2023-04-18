@extends('master')

@section('content')

    <!--page header section start-->
    <section class="call-to-action ptb-100 gradient-overly-bottom" style="background: url({{asset('img/ithrytec/img7.png')}})no-repeat center center / cover fixed">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 col-lg-12">
                    <div class="page-header-content text-white text-center">
                        <div class="hero-image mb-5">
                            <img src="{{asset('img/ithrytec/pylevent.png')}}" width="300px"  alt="security" class="hero-shape-img img-fluid  px-3 mt-5" />
                        </div>
                        <h1 class="text-white mb-2 text-center">Système de billetterie en ligne</h1>

                        <hr style="width:10%;height:3px;margin-top:15px;background-color: #005cbf;border-radius:1px">

                        <p class="lead text-center">Système de billetterie en ligne pour la gestion d'événements, des billets
                            et des processus événementiels rapidement et efficacement.</p>

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
                        <p style="color:#302e69;">Actuellement, il est devenu très important et nécessaire de proposer des <b>billets en ligne</b> en plus des
                            ventes au guichet.<br>
                            Les exigences réglementaires en période de <b>Covid-19</b> ont encore accru ce besoin.<br>
                            La gestion de la vente des billets via une plateforme en ligne évite les longues files d'attente aux
                            guichets. <b>LabTec</b> vous propose un système de billetterie événementielle qui garantit un
                            traitement optimal, rapide et simple de la vente de billets en ligne.
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
                <div class="col-lg-6 col-12">
                    <div class="section-heading mb-5 text-white">
                        <h5 class="text-white">PylEvents</h5>
                        <hr style="width:10%;height:2px;margin-top:10px;background-color: #005cbf;border-radius:1px;margin-left:0px">
                        <p>Facile à utiliser, personnalisable et flexible — <b>PylEvents</b> est une solution complète
                            pour créer et gérer vos événements.<br><br>
                            <b>PylEvents est un script de planification, de gestion et de vente de billets
                                d'événements.</b><br><br>
                            Avec PylEvents, vous pouvez lancer une plateforme dédiée à l'organisation
                            d'événements sur votre domaine.<br><br>
                            En d'autres termes, il s'agit d'un système de gestion d'événements multi-
                            organisationnels auto-hébergé. Rationalisez le processus de planification
                            d'événements grâce à l'automatisation.</p>
                    </div>
                </div>
                <div class="col-lg-5 col-12">
                    <div class="hero-image mt-5">
                        <img style="border-radius:100px 100px  100px 0px; background-color: white;color:#302e69;padding-top:50px;padding-bottom:50px" src="{{asset('img/ithrytec/pylevent1.png')}}"  alt="security" class="hero-shape-img img-fluid pl-0  pr-5 mt-5" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--buttons section end-->

    <section class="start-transfer ptb-100 gray-light-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="section-heading text-center mb-5">
                        <h4 style="color: #856ef5">Fonctionnalités de Pyl Event !</h4>
                        <h6 style="color: #302e69">Pyl Events offre une meilleure simplicité et performance dans la gestion des événements.</h6>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="text-center">
                        <img src="{{asset('img/ithrytec/bil1.png')}}" alt="shared hosting" class="img-fluid mb-4 " width="50px"/>
                        <div class="service-plane-content">
                            <h6 class="h5" style="color:#302e69;">Réservation de billets en ligne en quelques clics</h6>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="text-center">
                        <img src="{{asset('img/ithrytec/bil2.png')}}" alt="shared hosting" class="img-fluid mb-4 " width="50px"/>
                        <div class="service-plane-content">
                            <h6 class="h5" style="color:#302e69;">Billet PDF généré automatiquement avec QrCode</h6>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="text-center">
                        <img src="{{asset('img/ithrytec/bil3.png')}}" alt="shared hosting" class="img-fluid mb-4 " width="50px"/>
                        <div class="service-plane-content">
                            <h6 class="h5" style="color:#302e69;">Check-in App: Scanner de billets intégré</h6>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class=" text-center">
                        <img src="{{asset('img/ithrytec/bil4.png')}}" alt="shared hosting" class="img-fluid mb-4 " width="50px"/>
                        <div class="service-plane-content">
                            <h6 class="h5" style="color:#302e69;">Notofications par e-mail</h6>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="text-center">
                        <img src="{{asset('img/ithrytec/bil5.png')}}" alt="shared hosting" class="img-fluid mb-4 " width="50px"/>
                        <div class="service-plane-content">
                            <h6 class="h5" style="color:#302e69;">Tableau de bord avec un aperçu des statistiques globales</h6>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="text-center">
                        <img src="{{asset('img/ithrytec/bil6.png')}}" alt="shared hosting" class="img-fluid mb-4 " width="50px"/>
                        <div class="service-plane-content">
                            <h6 class="h5" style="color:#302e69;">Statistiques sur les billets d'événement</h6>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="text-center">
                        <img src="{{asset('img/ithrytec/bil7.png')}}" alt="shared hosting" class="img-fluid mb-4 " width="50px"/>
                        <div class="service-plane-content">
                            <h6 class="h5" style="color:#302e69;">Rapports sur les ventes</h6>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="text-center">
                        <img src="{{asset('img/ithrytec/bil8.png')}}" alt="shared hosting" class="img-fluid mb-4 " width="50px"/>
                        <div class="service-plane-content">
                            <h6 class="h5" style="color:#302e69;">Gestion et suivi faciles des revenus</h6>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="text-center">
                        <img src="{{asset('img/ithrytec/bil9.png')}}" alt="shared hosting" class="img-fluid mb-4 " width="50px"/>
                        <div class="service-plane-content">
                            <h6 class="h5" style="color:#302e69;">Passerelles de paiement</h6>
                            <br>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </section>

    <!--start and transfer section start-->
    <section class="start-transfer ptb-100 ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading mb-5">
                        <h5 style="color:#856ef5;">Réservation de billets en ligne</h5>
                        <hr style="width:10%;height:2px;margin-top:10px;background-color: #005cbf;border-radius:1px;margin-left:0px">
                        <h6 style="color: #302e69">Toutes les réservations de l'événement peuvent être gérées à partir du panneau d'administration.</h6>
                        <li><b style="color:#302e69">☑ Les clients peuvent réserver des billets en quelques clics. </b></li>
                        <li><b style="color:#302e69">☑ Le client doit être inscrit sur le site Web et connecté pour réserver un billet (acheter des billets).</b></li>
                        <li><b style="color:#302e69">☑ L'administrateur ou l'organisateur peut créer une réservation pour un client directement, sans effectuer de
                                paiement en ligne.</b>
                        </li>
                        <li><b style="color:#302e69">☑ L'administrateur peut désactiver une réservation et modifier son statut de paiement et d'annulation. ( Le scanner
                                de billets n'autorise pas les réservations désactivées pour l'enregistrement.).</b>
                        </li>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="start-transfer ptb-100 gray-light-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading mb-5">
                        <h5 style="color:#856ef5;">Billet PDF généré automatiquement avec QrCode</h5>
                        <hr style="width:10%;height:2px;margin-top:10px;background-color: #005cbf;border-radius:1px;margin-left:0px">
                        <h6 style="color: #302e69">Pyl Events génère des billets au format PDF avec un QrCode unique dans chacun.</h6>
                        <li><b style="color:#302e69">☑ QrCode a un ID de ticket unique + numéro de commande, qui appartient au ticket d'un seul client. </b></li>
                        <li><b style="color:#302e69">☑ Le format de ticket est PDF, il est donc compatible par défaut sur tous les appareils.</b></li>
                        <li><b style="color:#302e69">☑ La taille de QrCode sur le ticket est augmentée, par conséquent, la numérisation est plus rapide et vous n'avez
                                même pas besoin de Zoom in</b>
                        </li>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="start-transfer ptb-100 ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading mb-5">
                        <h5 style="color:#856ef5;">Scanner de billets intégré</h5>
                        <hr style="width:10%;height:2px;margin-top:10px;background-color: #005cbf;border-radius:1px;margin-left:0px">
                        <p style="color: #302e69">
                            <b>PylEvents</b> est livré avec une application mobile pour scanner les tickets. Les organisateurs et les administrateurs
                            peuvent<b>scanner et valider les billets des clients à l'entrée et enregistrez-les directement</b>.

                            Le scanner de billets scan Qr Code sur le billet, vérifie si le billet est valide et fournit une option aux participants.<b>Une
                                fois qu'un ticket est scanné, il ne peut plus jamais être scanné après</b>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="start-transfer ptb-100 gray-light-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading mb-5">
                        <h5 style="color:#856ef5;">Tableau de bord</h5>
                        <hr style="width:10%;height:2px;margin-top:10px;background-color: #005cbf;border-radius:1px;margin-left:0px">
                        <p> Le tableau de bord affiche une vue d'ensemble des données globales du site avec un graphique statistique et un
                            tableau. Vous pouvez suivre les activités de vente de votre événement en temps réel à partir du tableau de bord.
                        </p>
                        <li><b style="color:#302e69">☑ Rapport sur les ventes </b>
                            <br>
                            <p>Une vue rapide de l'événement le plus vendu avec le nombre total de réservations.</p>
                        </li>
                        <li><b style="color:#302e69">☑ Statistiques sur les billets d'événement</b>
                            <br>
                            <p> Rapports de vente globaux de tous les événements avec les revenus de l'organisateur, la commission
                                administrative, l'état des paiements, ete, Vous pouvez également filtrer les rapports de vente par événements et
                                leurs billets.
                            </p>
                        </li>
                        <li><b style="color:#302e69">☑ Gestion des revenus</b>
                            <br>
                            <p>Vous pouvez gérer et suivre facilement les revenus nets, les gains et les paiements mensuels de votre événement .</p>
                        </li>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="call-to-action ptb-100 " style="background-color: #232379">
        <div class="container">
            <div class="row justify-content-center">
                <img src="{{asset('img/ithrytec/why.png')}}" alt="" style="width:70%;height: auto" class="hero-shape-img img-fluid">
            </div>
        </div>
    </section>

@endsection
