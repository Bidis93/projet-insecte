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

                                {{ $insect->name }} !

                        @endforeach

                        <a href = "{{ route('informations.index') }}">Cliquez ici pour voir vos informations !</A>
                        <br><br>
                        ! Voici votre liste d'amis : <br>
                        </p>

                        @if(count($insects) === 0)
                            <?= "Vous n'avez aucun ami dans votre liste d'amis :'("; ?>
                        @endif
                        <p>Cliquez <a href="browseForFriends">ici</a> pour ajouter de nouveaux amis !</p>

                        @foreach($insects as $insect)
                            <table>
                                <tr>
                                    <td>
                                        <a href="insect/{{ $insect->id }}">{{ $insect->name }} </a>
                                        ({{ $insect->age }}) - ({{ $insect->food }})
                                    </td>
                                    <td>
                                        <a href="delete/{{ $insect->id }}">Retirer de la liste d'amis</a>
                                    </td>
                                </tr>
                            </table>
                        @endforeach


                    </div>

                </div>
        </div>
    </div>
  </div>
</div>
@endsection
