@php
    $label ??= null;
    $class ??= null;
    $name  ??= '';
    $value ??='';
@endphp

<div @class(['form-group' ,$class])> 
    
    <div class="col">
        
        <select name="{{$name}}[]" id="{{$name}}" multiple>
            @foreach ($options as $k =>$v)
                <option @selected($value->contains($k)) value="{{$k}}">{{$v}}</option>
            @endforeach
        </select>
        @error($name)
            <div class="invalid-feedback"> {{$message}}</div>
        @enderror
    </div>
</div>
