@extends('layouts.app')

@section('content')


<section class="module">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h1 class="module-title font-alt">Alle Artikel</h1>
              </div>
            </div>
            <hr class="divider-w pt-20">
            <div class="row">
              <div class="col-sm-12">
                <table class="table table-striped table-border checkout-table">
                  <tbody>
                    <tr>
                      <th>Id</th>
                      <th>Artikel</th>
                      <th>Beschreibung</th>
                      <th>Preis</th>
                      <th>Benutzer</th>
                      <th>hinzugefügt</th>
                      <th>Optionen</th>
                    </tr>

                   
        @foreach($articles->all() as $article)
            <tr>
                <td>
                  <img src="{{asset('images/' . $article->image)}}" width="100px">
                </td>

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
                <td>
                    <div class="btn-group btn-group">
                        <a href="{{route('article.edit', $article->id)}}"><i class="fas fa-fw fa-pencil-alt"></i></a>
                        <a href="{{route('frontend.show', $article->id)}}"><i class="fas fa-fw fa-eye"></i></a>
                        <a href="{{route('article.delete', $article->id)}}"><i class="fas fa-fw fa-trash-alt"></i></a>
                    </div>
                </td>
            </tr>
        @endforeach
 
                  </tbody>
                </table>
              </div>
            </div>

              <div class="col-sm-3 col-sm-offset-9">
                <div class="form-group">
                  <div class="col-sm-12 align-center"><a class="btn btn-b btn-round" href="{{route('article.create')}}">Artikel hinzufügen</a></div>
                </div>
              </div>
            </div>
            <hr class="divider-w">
            
          </div>
        </section>


@endsection