@extends('admin.admin')


@section('content')
    <h1>
    @if($property->exists )
    Modifier du bien  
    @else 
    Créer du bien
    @endif </h1>

    <form action="{{route($property->exists ? 'admin.property.update' : 'admin.property.store',$property)}}" method="post"> 
        @csrf
        @method($property->exists ? 'put' : 'post')


            <div class=" row">
                @include('shared.input',['class'=>'col', 'label' =>'Titre','name' =>'title','value' =>$property->title])
                @include('shared.input',['class'=>'col','label' =>'price','name' =>'price','value' =>$property->price])
                @include('shared.input',['class'=>'col','label' =>'surface','name' =>'surface','value' =>$property->surface])
            </div>
           
            <div class=" row">
                @include('shared.input',['class'=>'col','label' =>'rooms','name' =>'rooms','value' =>$property->rooms])
                @include('shared.input',['class'=>'col','label' =>'bedrooms','name' =>'bedrooms','value' =>$property->bedrooms])
                @include('shared.input',['class'=>'col','label' =>'floor','name' =>'floor','value' =>$property->floor])
            </div>
            <div class=" row">
                @include('shared.input',['class'=>'col','label' =>'description','name' =>'description','value' =>$property->description])
                @include('shared.input',['class'=>'col','label' =>'address','name' =>'address','value' =>$property->address])
                @include('shared.checkbox',['label' =>'vendu','name' =>'sold','value' =>$property->sold])
                @include('shared.select',['label' =>'options','name' =>'options','value' =>$property->options()->pluck('id'), 'multiple'=>true,'options'=>$options])
            </div>
            

        <div>
            <button class="btn btn-primary">
                @if($property->exists )
                modifier 
                @else 
                créer
                @endif
            </button>
        </div>
    </form>


@endsection