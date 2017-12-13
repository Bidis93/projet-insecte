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
                        ! Voici votre liste d'amis : <br>
                        </p>
                        
                        @if(count($insects) === 0)
                            <?= "Vous n'avez aucun ami dans votre liste d'amis :'("; ?>
                        @endif
                        <p>Cliquez <a href='/browseForFriends'>ici</a> pour ajouter de nouveaux amis !</p>

                        @foreach($insects as $insect)
                            <table>
                                <tr>
                                    <td>
                                        <a href="insect/{{ $insect->id }}">{{ $insect->name }} </a> 
                                        ({{ $insect->race }}) - 
                                    </td>
                                    <td>
                                        <a href="delete/{{ $insect->id }}">&nbsp;   Retirer de la liste d'amis</a>
                                    </td>
                                </tr>
                            </table>
                        @endforeach

                        
                    </div>

                </div>
                <div><a href="{{ route('informations.index') }}">Mes infos</a>
            </div>
        </div>
    </div>
</div>
@endsection
