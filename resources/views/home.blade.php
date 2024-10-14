@extends('base')
@section('content')
<h1>Mon agance </h1>
<h2>nous dernies bien </h2>
<div class="container">
    <div class="row">
        @foreach ( $properties as $property )
            <div class="col">
                @include('properties.card')
            </div>
        @endforeach
    </div>
</div>
@endsection