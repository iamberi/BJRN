@extends('layouts.app')

@section('content')


<div class="card mb-2">
    <div class="card-header">Neuen Artikel hinzufügen</div>
    <div class="card-body">
        <form>
            <div class="form-group">
                <label for="article">Artikel Bezeichnung</label>
                <input type="text" class="form-control" id="article">    
            </div>
            <div class="form-group">
                <label for="articleDescription">Beschreibung</label>
                <textarea class="form-control" id="articleDescription"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Artikel hinzufügen</button>
        </form>
    </div>
</div>

@endsection