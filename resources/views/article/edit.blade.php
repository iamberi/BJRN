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
    <div class="card-header">Artikel bearbeiten</div>
    <div class="card-body">
        <form action="{{route('article.update', $article->id)}}" method="post">
        @csrf
        @method('PUt')

            <div class="form-group">
                <label for="article">Artikel Bezeichnung</label>
                <input type="text" class="form-control {{$errors->has('article') ? 'is-invalid' : ''}}" id="article" name="article" value="{{old('article') ?? $article->article ?? ''}}" placeholder='Artikel Bezeichnung'>    
            </div>
            <div class="form-group">
                <label for="description">Beschreibung</label>
                <textarea class="form-control {{$errors->has('description') ? 'is-invalid' : ''}}" id="description" name="description" id="description" name="description" placeholder='Beschreibung'>{{old('description') ?? $article->description ?? ''}}</textarea>
            </div>
            <div class="form-group">
                <label for="price">Preis</label>
                <input type="text" class="form-control{{$errors->has('price') ? 'is-invalid' : ''}}" id="price" name="price" value="{{old('price') ?? $article->price ?? ''}}" id="price" name="price" value="{{$article->price}}" placeholder='Preis'> 
            </div>

            <button type="submit" class="btn btn-primary">Änderungen speichern</button>
        </form>
    </div>
</div>

@endsection