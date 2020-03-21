@extends('layouts.frontend')

@section('content')

@for($i=0; $i<20; $i++)
<div class="card mb-2">
    <div class="card-header">T-Shirt</div>
    <div class="card-body">
    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. 
    </div>
</div>
@endfor
@endsection