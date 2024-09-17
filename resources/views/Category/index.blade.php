@extends('layouts.app')

@section('body')
    <div class="container">
<h1>Category Info</h1>

<x-operation.success/>

<div class="my-3">
<a href="{{route('category.create')}}" class="btn btn-primary">Create new category</a>
</div>

<div class="my-3 table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Category Name</th>
                <th>Created at</th>
                <th>Actions</th>
            </tr>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$category->category_name}}</td>
                    <td>{{$category->created_at}}</td>
                    <td><a href="{{route('category.show',["category"=>$category])}}">Show</a></td>
                    <td><form action="{{route('category.destroy',["category"=>$category])}}" method="Post">
                        <Button class="btn btn-danger">Delete</Button>
                        @csrf
                    @method('Delete')</form></td>
                    <td><a href="{{route('category.edit',["category"=>$category])}}" class="text-warning">Edit</a></td>
                </tr>
            @endforeach
        </tbody>    
        </thead>

    </table>

</div>
</div>
@endsection