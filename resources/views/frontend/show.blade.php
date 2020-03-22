@extends('layouts.frontend')

@section('content')
<div class="card mb-2">
    <div class="card-header"><h1>{{$article->article}}</h1></div>
        <div class="card-body">
            {{$article->description}}
            {{$article->price}}
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