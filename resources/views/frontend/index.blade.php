@extends('layouts.frontend')

@section('content')

@foreach($articles->all() as $article)
<div class="card mb-2">
    <div class="card-header"><a href="{{route('frontend.show', $article->id)}}">{{$article->article}}</a></div>
    <div class="card-body">

        <div class="row">
            <div class="col-md-6">
                <small>{{__('Author')}}: {{$article->user->name}} </small>
            </div>
            <div class="col-md-6 text-right">
                <strong>{{__('Price')}}: {{$article->price}}</strong>
            </div>
            <hr>
            {{$article->description}}
    </div>
</div>
@endforeach
@endsection