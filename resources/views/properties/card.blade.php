<div class="card">
    <div class="card-body">
        <h5 class="card-title">
            <a href="{{route('property.show',['slug'=>$property->getSlug(),'property'=>$property])}}"> {{$property->title}}</a>
        </h5>
        <p class="card-text">
            {{$property->surface}}M² -{{$property->address}}
        </p>
        <div class="text-primary">{{$property->price}} $</div>
    </div>
</div>