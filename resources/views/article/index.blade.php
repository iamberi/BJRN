@extends('layouts.app')

@section('content')


<section class="module bg-dark-30 parallax-bg restaurant-menu-bg" data-background="assets/images/restaurant/cake_pastries_bg.jpg">
          <div class="container">
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
                <h2 class="module-title font-alt mb-0">Alle Artikel</h2>
              </div>
            </div>
          </div>
        </section>
</br>
<section>
        <div class="container mt-2">
            <div class="row">

       <table class="table table-responsive-lg">
       <thead class="menu-title font-alt">
            <tr>
                <th>Id</th>
                <th>Artikel</th>
                <th>Beschreibung</th>
                <th>Preis</th>
                <th>Benutzer</th>
                <th>hinzugefügt am</th>
                <th>Optionen</th>
            </tr>
       </thead>
       <tbody>
        @foreach($articles->all() as $article)
            <tr>
                <td>{{$article->id}}</td>
                <td>{{$article->article}}</td>
                <td>{{$article->description}}</td>
                <td>{{$article->price}}</td>
                <td>{{$article->user->name}}</td>
                <td>{{$article->created_at->format('d.m.Y H:i')}}</td>
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
</section>

@endsection