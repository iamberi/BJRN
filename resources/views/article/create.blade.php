@extends('layouts.app')

@section('content')


<section class="module bg-dark-30 about-page-header" data-background="{{ asset('assets/images/shop/Header-img-1.jpg')}}">
    <div class="container">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
        <h1 class="module-title font-alt mb-0">Artikel hinzufügen</h1>
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
                <h4 class="font-alt mb-0" >Neuen Artikel hinzufügen</h4>
                <hr class="divider-w mt-10 mb-20">
                <form class="form" role="form" action="{{route('article.store')}}" method="post">
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
                 
                  <div class="form-group row mb-0">
                            
                            <button type="submit" class="btn btn-block btn-round btn-b">
                                Artikel hinzufügen
                            </button>
                       
                    </div>

                </form>
              </div>
            </div>
          </div>
    </section>


@endsection