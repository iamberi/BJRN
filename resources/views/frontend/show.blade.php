@extends('layouts.frontend')

@section('content')
<div class="card mb-2">
    <div class="card-header"><h1>{{$article->article}}</h1>
    </div>
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
</div>

@auth
<div class="card mb-2">
    <div class="card-header">Kommentar einfügen</div>
        <div class="card-body">
        Fromular
        </div>
</div>
@endauth

<div class="card mb-2">
    <div class="card-header">Bisher abgegebene Kommentare</div>
        <div class="card-body">
folgt...        </div>
</div>
@endsection