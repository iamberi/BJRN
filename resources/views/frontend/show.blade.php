@extends('layouts.frontend')

@section('content')

<section class="module">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 mb-sm-40"><a class="gallery" href="{{asset('assets/images/shop/product_grey-shirt.jpg')}}"><img src="{{asset('assets/images/shop/product_grey-shirt.jpg')}}" alt="Single Product Image"/></a>
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
                      <p>{{$article->description}}</p>
                    </div>
                  </div>
                </div>
                <div class="row mb-20">
                  <div class="col-sm-8"><a class="btn btn-lg btn-block btn-round btn-b" href="#">Artikel anfragen</a></div>
                </div>
                <div class="row mb-20">
                  <div class="col-sm-12">
                    <div class="product_meta">{{__('Benutzer')}}: {{$article->user->name}} </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
         
          </div>
        </section>

@endsection