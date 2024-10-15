@extends('base')
@section('title','tout nous bien')

@section('content')

    <div class="bg-light p-5 mb-5 text-center">
        <form action="" method="get" class="container d-flex gap-2">
            <input type="number" name="price" id="" placeholder="budget max " class="form-controle" value="{{$input['price']?? ''}}">
            <input type="number" name="surface" id="" placeholder="surface max " class="form-controle" value="{{$input['surface']?? ''}}">
            <input type="number" name="rooms" id="" placeholder="rooms max " class="form-controle" value="{{$input['rooms']?? ''}}">
            <input type="text" name="title" id="" placeholder="Mots clef" class="form-controle" value="{{$input['title']?? ''}}">

            <button class="btn btn-primary btn-sm.flew-group">submit</button>

        </form>

    </div>
    <div class="container">
        <div class="row">
            @forelse ( $properties as $property )
            <div class="col-3 mb-4">
                @include('properties.card')
            </div>
            @empty
                <div class="col-6"> pas de Bien </div>

            @endforelse
        </div>
        <div class="col-6">
            {{$properties->links()}}
        </div>
    </div>
@endsection
