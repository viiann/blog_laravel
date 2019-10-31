@extends('layouts.app')
@section('content')

@foreach($articles as $article)

<a href="{{route('article.show',$article->id)}}">{{$article->titre}}</a>
<p>{{Str::limit($article->contenu,$limit = 50, $end = "....")}}</p>



@endforeach

@endsection