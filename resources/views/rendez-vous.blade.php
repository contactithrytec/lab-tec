@extends('master')

@section('content')

    <section class="ptb-100 gradient-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-12">
                    <div class="section-heading mb-5 text-white">
                        <h5 class="text-white">Rendez-Vous</h5>
                        <hr style="width:10%;height:2px;margin-top:10px;background-color: #005cbf;border-radius:1px;margin-left:0px">
                        <p><b>nous organisons un rendez-vous à votre convenance pour discuter
                                de votre projet il veut proposer des solutions et services adaptés à vos besoins.</b>
                        </p>
                    </div>
                </div>
                <div class="col-lg-5 col-12">
                    <div class="hero-image mt-5">
                        <img style="border-radius:0px 100px 100px 100px; background-color: white;color:#302e69" src="{{asset('img/ithrytec/ithrytec_logo.png')}}"  alt="security" class="hero-shape-img img-fluid py-1 px-1" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if ($errors->any())
        <br>
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if(session()->has('success'))
        <br>
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif


    <section class="hero-equal-height pt-165 pb-100 gradient-overla">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading text-center mb-md-0 mb-lg-5">
                        <h2>Rendez-vous <font color="#302e69">ITHRY</font><font color="#5669de">TEC</font></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="feature-content-wrap">
                        <div class="tab-content feature-tab-content">
                            <div class="tab-pane active" id="tab6-1">
                                <div class="row align-items-center justify-content-between">
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <div class="card popular-price  single-pricing-pack">
                                            <div class="pt-5 text-center">
                                                <h4 class="text-center mb-0 monthly-price">Demander un Rendez-vous</h4>
                                            </div>
                                            <div class="card-header pb-4 border-0 pricing-header">
                                                {{--<div class="price text-center mb-0 monthly-price">$19<span>/month</span></div>--}}
                                            </div>
                                            <div class="card-body">
                                                <form action="{{route('date.store') }}" method="post" class="contact-us-form mt-3" novalidate="novalidate">
                                                    @csrf
                                                    <div class="form-row">
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="first_name" style="font-size:medium;color: #302e69"><b>Nom</b><font color="red"> * </font>:</label>
                                                                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Entrez le Nom" required="required" value="{{ old('first_name') }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="last_name" style="font-size:medium;color: #302e69"><b>Prénom</b><font color="red"> * </font>:</label>
                                                                <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Entrez le Prénom" required="required" value="{{ old('last_name') }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="email" style="font-size:medium;color: #302e69"><b>Email</b><font color="red"> * </font>:</label>
                                                                <input type="email" class="form-control" name="email" id="email" placeholder="Entrez l'e-mail" required="required" value="{{ old('email') }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="phone" style="font-size:medium;color: #302e69"><b>Numéro de téléphone</b><font color="red"> * </font>:</label>
                                                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Entrez le numéro de téléphone" required="required" value="{{ old('phone') }}">
                                                            </div>
                                                        </div>

                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="type" style="font-size:medium;color: #302e69"><b>Type</b><font color="red"> * </font> : </label>
                                                                <select id="type" name="type" class="form-control has-value" value="{{ old('type') }}">
                                                                    <option data-display="Type de rendez-vous">Type de rendez-vous</option>
                                                                        <option @if(old('type') == "facetoface") selected @endif value="facetoface">Présentiel</option>
                                                                        <option @if(old('type') == "enline") selected @endif value="enline">En ligne</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="post" style="font-size:medium;color: #302e69"><b>Date</b><font color="red"> * </font>:</label>
                                                                <input type="date" class="form-control" name="date" id="date" required="required" value="{{ old('date') }}">
                                                            </div>
                                                        </div>

                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="post" style="font-size:medium;color: #302e69"><b>Heure</b><font color="red"> * </font>:</label>
                                                                <input type="time" class="form-control" name="time" id="time" required="required" value="{{ old('time') }}">
                                                            </div>
                                                        </div>

                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="address" style="font-size:medium;color: #302e69"><b>Addresse</b><font color="red"> * </font>:</label>
                                                                <input type="text" class="form-control" name="address" id="address" placeholder="Entrez l'adresse" required="required" value="{{ old('address') }}">
                                                            </div>
                                                        </div>

                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="country" style="font-size:medium;color: #302e69"><b>pays : </b></label>
                                                                <select id="country" name="country" class="form-control has-value">
                                                                    <option data-display="Entrez le pays">Entrez le pays</option>
                                                                    @foreach($countries as $country)
                                                                        <option @if(old('country') == $country->country_name) selected @endif value="{{$country->country_name}}">{{$country->country_name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="country" style="font-size:medium;color: #302e69"><b>Ville : </b></label>
                                                                <input type="text" class="form-control" name="city" id="city" placeholder="Entrez la ville " value="{{ old('city') }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="comment" style="font-size:medium;color: #302e69"><b>Commentaire :</b></label>
                                                                <textarea name="comment" id="comment" class="form-control" rows="3" cols="25" placeholder="Quels sont vos besions">{{ old('comment') }}</textarea>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="country" style="font-size:medium;color: #302e69"><b>ReCaptcha :</b></label>
                                                                <div class="form-group"><div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}"></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-12 mt-3">
                                                            <button type="submit" class="btn primary-solid-btn" id="btnContactUs">
                                                                Envoyer le message
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
