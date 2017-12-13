@extends('layouts.app')

@section('content')

@foreach($insects as $insect)
	<table>
	    <tr>
	        <td>
             <a href="insect/{{ $insect->id }}">
	        {{ $insect->name }}
	    </a> ({{ $insect->race }})
	        </td>
	        
	        <td>
	            <a href="add/{{ $insect->id }}">&nbsp; - Ajoutez à la liste d'amis</a>
	        </td>
	    </tr>
	</table>
@endforeach


<a href="home">Retour à l'accueil</a>

@endsection