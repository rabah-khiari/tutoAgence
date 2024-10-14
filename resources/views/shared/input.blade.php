@php
    $label ??= null;
    $type  ??= 'text';
    $class ??= null;
    $name  ??= '';
    $value ??='';
@endphp

<div @class(['form-group' ,$class])> 
    
    <div class="col">
        <input class="form-controle @error($name) is-invalid @enderror" type="{{$type}}" id="{{$name}}" name="{{$name}}" value="{{old($name,$value)}}" placeholder="{{$label}}">
        @error($name)
            <div class="invalid-feedback"> {{$message}}</div>
        @enderror
    </div>
</div>
