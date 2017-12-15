@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <h1>Mes informations</h1>

                <form method="POST" action="{{ route('update', $insect) }}">

                    {{ csrf_field() }}

                  <div class="form-group">
                    <label for="name">Nom : {{ $insect->name }}</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $insect->name }}">
                  </div>

                  <div class="form-group">
                    <label for="age">Age : {{ $insect->age }}</label>
                    <input type="text" class="form-control" id="age" name="age" value="{{ $insect->age }}">
                  </div>

                  <div class="form-group">
                    <label for="race">Race : {{ $insect->race }}</label>
                    <input type="text" class="form-control" id="race" name="race" value="{{ $insect->race }}">
                  </div>

                  <div class="form-group">
                    <label for="family">Famille : {{ $insect->family }}</label>
                    <input type="text" class="form-control" id="family" name="family" value="{{ $insect->family }}">
                  </div>

                  <div class="form-group">
                    <label for="food">Nourriture : {{ $insect->food }}</label>
                    <input type="text" class="form-control" id="food" name="food" value="{{ $insect->food }}">
                  </div>

                   <button type="submit" class="btn btn-primary">Modifier</button>

                </form>

                <a href="{{ route('home') }}">Retour à l'accueil</a>

            </div>
        </div>
    </div>
</div>
@endsection
