@extends('layouts.app')

@section('content')


<section class="module bg-dark-30 about-page-header" data-background="{{ asset('assets/images/about_bg.jpg')}}">
    <div class="container">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
        <h1 class="module-title font-alt mb-0">Artikel löschen</h1>
        </div>
    </div>
    </div>
</section>
       
@if($errors->any())
<div class="alert alert-danger">
    <ul>
    @foreach ($errors->all() as $message) 
        <li>{{$message}}</li>
    @endforeach
    </ul>
</div>
@endif

        <section class="module">
          <div class="container">
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
                <h4 class="font-alt mb-0" >Artikel löschen</h4>
                <hr class="divider-w mt-10 mb-20">
                <form class="form" role="form" action="{{route('article.destroy', $article->id)}}" method="post">
                    @csrf
                    @method('DELETE')


                    <table class="table table-striped table-border checkout-table">
                    <tbody>
                    <tr>
                      <th>Id</th>
                      <th>Artikel</th>
                      <th>Beschreibung</th>
                      <th>Preis</th>
                      <th>Benutzer</th>
                      <th>hinzugefügt</th>
                    </tr>
                    <tr>
                <td>
                  <h5 class="product-title font-alt">{{$article->id}}</h5>
                </td>
                <td>
                  <h5 class="product-title font-alt">{{$article->article}}</h5>
                </td>
                <td>
                  <h5 class="product-title font-alt">{{$article->description}}</h5>
                </td>
                <td>
                  <h5 class="product-title font-alt">{{$article->price}}</h5>
                </td>
                <td class>
                  <h5 class="product-title font-alt">{{$article->user->name}}</h5>
                </td>
                <td class>
                  <h5 class="product-title font-alt">{{$article->created_at->format('d.m.Y H:i')}}</h5>
                </td>     
                  </tr>
                  </tbody>
                </table>
                 
                  <div class="form-group row mb-0">
                  <div class="col-sm-3 col-sm">
                    <a href="{{route('article.index')}}" class="btn btn-round btn-g" role="button">
                                Nein, Artikel behalten
                    </a>
                  </div>
                    <div class="col-sm-3 col-sm-offset-1">
                    <button type="submit" class="btn btn-round btn-round btn-b">
                        Ja, Artikel endgültig löschen
                    </button>
                    </div>
                
                    </div>

                </form>
              </div>
            </div>
          </div>
    </section>


@endsection