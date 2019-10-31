@extends('layouts.app')
@section('content')

{{$article->titre}}<br/><br/>
{{$article->contenu}}<br/>
<h2>{{$article->user->username}}</h2>

@endsection