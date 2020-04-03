@extends('layouts.frontend')

@section('content')

<section class="module">
          <div class="container">
          <div class="widget">
                <ul class="icon-list">
                <li><a href="{{route('home')}}">Zurück zur Artikelübersicht</a></li>
                </ul>
            </div>
            <div class="row">
              <div class="col-sm-6 mb-sm-40"><a class="gallery"><img src="{{asset('images/' . $article->image)}}" alt="Single Product Image"/></a>
              </div>
              <div class="col-sm-6">
                <div class="row">
                  <div class="col-sm-12">
                    <h1 class="product-title font-alt">{{$article->article}}</h1>
                  </div>
                </div>
                
                <div class="row mb-20">
                  <div class="col-sm-12">
                    <div class="price font-alt"><span class="amount">{{$article->price}}</span></div>
                  </div>
                </div>
                <div class="row mb-20">
                  <div class="col-sm-12">
                    <div class="description">
                      <p class="font-alt mb-0">{{$article->description}}</p>
                    </div>
                  </div>
                </div>
                <div class="row mb-20">
                  <div class="col-sm-8">
                  <a  class="btn btn-lg btn-block btn-round btn-b"
                      href="mailto:{{__('Benutzer')}}: {{$article->user->email}}?subject=BJRN%20|%20Anfrage%20zu%20deinem%20Artikel:%20{{$article->article}}&amp;body=Infos%20zu%20deinem%20Artikel:%20Artikelname:%20{{$article->article}},%20Beschreibung:%20{{$article->description}},%20Preis:%20{{$article->price}}%20">
                    Artikel anfragen
                  </a>
                  <!-- <a class="btn btn-lg btn-block btn-round btn-b" href="{{route('frontend.contact')}}">Artikel anfragen</a> -->
                  </div>
                </div>
                <div class="row mb-20">
                  <div class="col-sm-12">
                    <div class="product_meta">{{__('Benutzer')}}: {{$article->user->name}} </a>
                    <div class="product_meta">{{__('Mail Adresse')}}: {{$article->user->email}} </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
         
          </div>
        </section>

@endsection