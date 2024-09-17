@extends('layouts.app')

@section('body')
    <div class="container">
<h1>Authers Info</h1>

<x-operation.success/>

<div class="my-3">
<a href="{{route('auther.create')}}" class="btn btn-primary">Create new auther</a>
</div>

<div class="my-3 table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Auther Name</th>
                <th>Nationality</th>
                <th>Created at</th>
                <th>Actions</th>
            </tr>
        <tbody>
            @foreach ($authers as $auther)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$auther->auther_name}}</td>
                    <td>{{$auther->auther_country}}</td>
                    <td>{{$auther->created_at}}</td>
                    <td><a href="{{route('auther.show',["auther"=>$auther])}}">Show</a></td>
                    <td><form action="{{route('auther.destroy',["auther"=>$auther])}}" method="Post">
                        <Button class="btn btn-danger">Delete</Button>
                        @csrf
                    @method('Delete')</form></td>
                    <td><a href="{{route('auther.edit',["auther"=>$auther])}}" class="text-warning">Edit</a></td>
                </tr>
            @endforeach
        </tbody>    
        </thead>

    </table>

</div>
</div>
@endsection