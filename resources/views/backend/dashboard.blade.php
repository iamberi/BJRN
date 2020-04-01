@extends('layouts.app')

@section('content')

</br>
<div class="container">
    <div class="row">
        <div class="col-md-12 ">


                <div class="card-body">
                    @include('partials.message')

                </div>
        </div>

                
<div class="col-sm-4 col-md-3 sidebar">
                <div class="widget">
                  <h5 class="widget-title font-alt">Dashboard</h5>
                  <ul class="icon-list">
                    <li><a href="{{route('article.index')}}"> Artikelübersicht anzeigen</a></li>
                    <li><a href="{{route('article.create')}}"> Artikel hinzufügen</a></li>
                  </ul>
                </div>
              </div>

            </div>
        
    </div>
</div>
@endsection
