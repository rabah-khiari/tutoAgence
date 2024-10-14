@extends('admin.admin')


@section('content')
    <h1>
    @if($option->exists )
    Modifier une option  
    @else 
    Créer une option
    @endif </h1>

    <form action="{{route($option->exists ? 'admin.option.update' : 'admin.option.store',$option)}}" method="post"> 
        @csrf
        @method($option->exists ? 'put' : 'post')


            <div class=" row">
                @include('shared.input',['class'=>'col', 'label' =>'Nom','name' =>'name','value' =>$option->name])
               
            </div>

        <div>
            <button class="btn btn-primary">
                @if($option->exists )
                modifier 
                @else 
                créer
                @endif
            </button>
        </div>
    </form>


@endsection