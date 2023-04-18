<h2>Bonjour</h2> <br><br>

Vous avez reçu un e-mail de : {{ $first_name }}  {{ $last_name }}<br><br>

Coordonnées d'utilisateur (Demander un rendez-vous): <br><br>

<span>● </span> Nom complet: {{ $first_name }}  {{ $last_name }} .<br>
<span>● </span> E-mail: {{ $email }} .<br>

<span>● </span> Type de rendez-vous:  @if($type=="facetoface") Présentiel @else En ligne @endif .<br>
<span>● </span> Numéro de téléphone: {{ $phone }} .<br>
<span>● </span>Date : {{ $date }} .<br>
<span>● </span>Heure : {{ $time }} .<br>
<span>● </span> Addresse: {{ $address }} .<br>

@if(!empty($country))
    <span>● </span> Pays: {{ $country }} .<br>
@endif
@if(!empty($city))
    <span>● </span> Ville: {{ $city }} .<br>
@endif
@if(!empty($comment))
    <span>● </span> Vos besoin: {{ $comment }} .<br>
@endif

<br>

Merci
