@extends('layouts.app')

@section('content')

<section class="module bg-dark-30 about-page-header" data-background="{{ asset('assets/images/about_bg.jpg')}}">
    <div class="container">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
        <h1 class="module-title font-alt mb-0">Artikel bearbeiten</h1>
        </div>
    </div>
    </div>
</section>
       
        @if($errors->any())
        <div class="alert alert-danger">
            <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
            <ul>
            @foreach ($errors->all() as $message) 
                <li>{{$message}}</li>
            @endforeach
            </ul>
            </div>
            </div>
        </div>
        @endif

        <section class="module">
          <div class="container">
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
                <h4 class="font-alt mb-0" >Artikel bearbeiten</h4>
                <hr class="divider-w mt-10 mb-20">
                <form class="form" role="form" action="{{route('article.update', $article->id)}}" method="post">
                    @csrf
                    @method('PUT')

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
                  <input type="text" class="form-control {{$errors->has('price') ? 'is-invalid' : ''}}" id="price" name="price" value="{{old('price') ?? $article->price ?? ''}}"  placeholder='Preis'> 
                  </div>
                 
                  <div class="form-group row mb-0">
                            
                            <button type="submit" class="btn btn-block btn-round btn-b">
                                Änderungen spreichern
                            </button>
                       
                    </div>

                </form>
              </div>
            </div>
          </div>
    </section>


@endsection