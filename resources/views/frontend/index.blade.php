@extends('layouts.frontend')

@section('content')

@foreach($articles->all() as $article)
<div class="card mb-2">
    <div class="card-header"><a href="{{route('frontend.show', $article->id)}}">{{$article->article}}</a></div>
    <div class="card-body">
        {{$article->description}}
    </div>
</div>
@endforeach
@endsection