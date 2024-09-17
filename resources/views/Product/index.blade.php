@extends('layouts.app')

@section('body')
    <div class="container">
<h1>Products Info</h1>

<x-operation.success/>

<div class="my-3">
<a href="{{route('product.create')}}" class="btn btn-primary">Create new product</a>
</div>

<div class="my-3 table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>product Name</th>
                <th>Price</th>
                <th>Created at</th>
                <th>Actions</th>
            </tr>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$product->product_name}}</td>
                    <td>{{$product->product_price}}</td>
                    <td>{{$product->created_at}}</td>
                    <td><a href="{{route('product.show',["product"=>$product])}}">Show</a></td>
                    <td><form action="{{route('product.destroy',["product"=>$product])}}" method="Post">
                        <Button class="btn btn-danger">Delete</Button>
                        @csrf
                    @method('Delete')</form></td>
                    <td><a href="{{route('product.edit',["product"=>$product])}}" class="text-warning">Edit</a></td>
                </tr>
            @endforeach
        </tbody>    
        </thead>

    </table>

</div>
</div>
@endsection