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
    <div class="card-header">Artikelübersicht</div>
    <div class="card-body">
       <table class="table table-bordered table-striped">
        @foreach($articles->all() as $article)
            <tr>
                <td>{{$article->id}}</td>
                <td>{{$article->description}}</td>
                <td>{{$article->price}}</td>
                <td>{{$article->user->name}}</td>
            </tr>
        @endforeach
       </table>
    </div>
</div>

@endsection