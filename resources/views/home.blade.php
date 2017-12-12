@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Liste d'amis</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div>
                        <p>Bonjour 
                        @foreach($loggedInsect as $insect)
                            <a href="profile/{{ $insect->id }}">
                                {{ $insect->name }} 
                            </a>
                        @endforeach
                        ! Voici votre liste d'amis : </p>
                        
                        @if(count($insects) === 0)
                            <?= "Vous n'avez aucun ami dans votre liste d'amis :'( <br> Cliquez <a href='/browseForFriends'>ici</a> pour trouver de nouveaux amis !"; ?>
                        @endif



                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
