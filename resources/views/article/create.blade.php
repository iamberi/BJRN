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
    <div class="card-header">Neuen Artikel hinzufügen</div>
    <div class="card-body">
        <form action="{{route('article.store')}}" method="post">
        @csrf
        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
            <div class="form-group">
                <label for="article">Artikel Bezeichnung</label>
                <input type="text" class="form-control" id="article" name="article" placeholder='Artikel Bezeichnung'>    
            </div>
            <div class="form-group">
                <label for="description">Beschreibung</label>
                <textarea class="form-control" id="description" name="description" placeholder='Beschreibung'></textarea>
            </div>
            <div class="form-group">
                <label for="price">Preis</label>
                <input type="text" class="form-control" id="price" name="price" placeholder='Preis'> 
            </div>

            <button type="submit" class="btn btn-primary">Artikel hinzufügen</button>
        </form>
    </div>
</div>

@endsection