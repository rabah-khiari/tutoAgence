@extends('base')
@section('title',$property->title)
@section('content')

<h1>title {{$property->title}}</h1>
<h2>rooms {{$property->rooms}}</h2>
<h2>price {{$property->price}} $</h2>
<h2>surface {{$property->surface}}</h2>
<h2>address {{$property->address}}</h2>

<div class="mt-4">
    <p> description : {{$property->surface}}</p>
    @foreach ($property->options as $option )
        <h5>{{$option->name}}</h5>        
    @endforeach
    @if ($property->sold==1)
        <h2 class="text-danger"> vendu </h2>
    @endif
</div>
    <div class="mt-4">
        <h4>Intéressé par ce bien ?</h4>
        <form action="{{route('property.contact',$property)}}" method="post" class="vstack gap-3">
            @csrf
            <div class="row">
                @include('shared.input',['class'=>'col','label' =>'Prénom','name' =>'firstname','value'=>'jhone'])
                @include('shared.input',['class'=>'col','label' =>'Nom','name' =>'lastname','value'=>'doe'])
            </div>
            <div class="row">
                @include('shared.input',['class'=>'col','label' =>'Phone','name' =>'phone','value'=>'06000000'])
                @include('shared.input',['class'=>'col','type'=>'email','label' =>'Email','name' =>'email','value'=>'jhone@mail.com'])
            </div>
            @include('shared.input',['class'=>'col','label' =>'Message','name' =>'message','value'=>'Mon message'])
            <button class="btn btn-primary"> nous contacter </button>
        </form>

    </div>

@endsection
