@extends('base')

@section('title')
@section('content')
    
    <div class="container">
        <h2>Login</h2>
        <form method="post" action="{{route('login')}}">
            @csrf
            @include('shared.input',['class'=>'col','label' =>'Email','name' =>'email','value'=>'jhone@gmail.com'])
            @include('shared.input',['class'=>'col','type' =>'password','label' =>'password','name' =>'password'])
            <button class="btn btn-primary">connect</button>
        </form>
    </div>

@endsection