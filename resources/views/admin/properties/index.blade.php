@extends('admin.admin')


@section('content')

<div class="d-flex justify-content-between align-item-center">
    <h1>Lies bien </h1>
    <a href="{{route('admin.property.create')}}" class="btn btn-primary"> Ajouter un bien </a>
</div>

<table class="table table-striped">

    <thead>
        <tr>
            <th>Title</th>
            <th>Surface</th>
            <th>Price</th>
            <th>address</th>
            <th class="text-end">Action</th>
           
        </tr>
    </thead>
    <tbody>
        @foreach ($properties as $property)
            <tr>
                <td>{{$property->title}}</td>
                <td>{{$property->surface}}</td>
                <td>{{$property->price}}</td>
                <td>{{$property->address}}</td>
                <td> 
                    <div class="d-flex gap-2 w-100 justify-content-end">
                        <a href="{{route('admin.property.edit',$property)}}" class="btn btn-primary"> Editer</a>
                        <form action="{{route('admin.property.destroy',$property)}}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger"> delete</button>
                        </form>
                     
                    </div> 
                </td>
            </tr>
        @endforeach
    </tbody>

</table>
{{$properties->links()}}


@endsection
