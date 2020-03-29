@extends('layouts.app')

@section('content')

@if($errors->any())
<div class="alert alert-danger">
    <ul>
    @foreach ($errors->all() as $message) 
        <li>{{$message}}</li>
    @endforeach
    </ul>
</div>
@endif

<div class="card mb-2">
    <div class="card-header">Artikel löschen</div>
    <div class="card-body">
        <form action="{{route('article.destroy', $article->id)}}" method="post">
        @csrf
        @method('DELETE')

            <button type="submit" class="btn btn-danger">Ja, Artikel entgültig löschen</button>
            <a href="{{route('article.index')}}" class="btn btn-primary" role="button">Nein, Artikel behalten</a>
        </form>
    </div>
</div>

@endsection