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
                <td>{{$article->created_at->format('d.m.Y H:i')}}</td>
                <td>
                    <div class="btn-group btn-group-sm">
                        <a href="{{route('article.edit', $article->id)}}" class="btn btn-sm btn-outline-secondary"><i class="fas fa-fw fa-pencil-alt"></i></a>
                        <a href="{{route('frontend.show', $article->id)}}" class="btn btn-sm btn-outline-secondary"><i class="fas fa-fw fa-eye"></i></a>
                        <a href="{{route('article.delete',$article->id)}}" class="btn btn-sm btn-outline-secondary"><i class="fas fa-fw fa-trash-alt"></i></a>
                </td>
            </tr>
        @endforeach
       </table>
    </div>
</div>

@endsection