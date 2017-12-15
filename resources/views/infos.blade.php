@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Mes informations<a href="{{ route('informations.edit', $insect) }}">  Modifier</a></div>


                        <p>Nom : {{ $insect->name }}</p><br>
                        <p>Age : {{ $insect->age }}</p><br>
                        <p>Race : {{ $insect->race }}</p><br>
                        <p>Famille : {{ $insect->family }}</p><br>
                        <p>Nourriture : {{ $insect->food }}</p><br>

                </div>

                <a href="{{ route('home') }}">Retour à l'accueil</a>

            </div>
        </div>
    </div>
</div>
@endsection
