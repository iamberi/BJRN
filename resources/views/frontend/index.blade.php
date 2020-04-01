@extends('layouts.frontend')

@section('content')

    <section class="home-section home-fade home-full-height" id="home">
        <div class="hero-slider">
          <ul class="slides">
            <li class="bg-dark-30 bg-dark shop-page-header" style="background-image:url(&quot;{{asset('assets/images/shop/Header-img-4.jpg')}}&quot;);">
              <div class="titan-caption">
                <div class="caption-content">
                  <div class="font-alt mb-30 titan-title-size-1">Wilkommen bei BJRN</div>
                  <div class="font-alt mb-30 titan-title-size-4"> Second Hand</div>
                  <div class="font-alt mb-40 titan-title-size-1">Deine Online-Kleiderplattform</div><a class="section-scroll btn btn-border-w btn-round" href="#latest">Produkte ansehen</a>
                </div>
              </div>
            </li>
            <li class="bg-dark-30 bg-dark shop-page-header" style="background-image:url(&quot;{{asset('assets/images/shop/Header-img-2.jpg')}}&quot;);">
              <div class="titan-caption">
                <div class="caption-content">
                  <div class="font-alt mb-30 titan-title-size-1">BJRN ist für dich</div>
                  <div class="font-alt mb-40 titan-title-size-4">Exklusive Produkte</div><a class="section-scroll btn btn-border-w btn-round" href="#latest">Produkte ansehen</a>
                </div>
              </div>
            </li>
          </ul>
        </div>
    </section>

    <section class="module-small" id="latest">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Die neusten Teile</h2>
              </div>
            </div>
            <div class="row multi-columns-row">
            @foreach($articles->all() as $article)
              <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="shop-item">
                  <div class="shop-item-image"><img src="{{asset('assets/images/shop/product_grey-shirt.jpg')}}" alt="Accessories Pack"/>
                    <div class="shop-item-detail"><a class="btn btn-round btn-b" href="{{route('frontend.show', $article->id)}}"><span>Details</span></a></div>
                  </div>
                  <h4 class="shop-item-title font-alt"><a href="{{route('frontend.show', $article->id)}}">{{$article->article}}</a></h4>{{__('Preis')}}: {{$article->price}}
                </div>
              </div>
            @endforeach
          </div>
    </section>

@endsection