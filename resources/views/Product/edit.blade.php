@extends('layouts.app')

@section('body')
<div class="container">
    <h1>Edit Product</h1>

   

    <form action="{{ route('product.update',['product'=>$product->id]) }}" method="POST">

        @csrf
        @method('put')
        <div class="mb-3">
            <label for="productName" class="form-label">product name</label>
            <input type="text" value="{{old('product_name') ?? $product->product_name}}" class="form-control" id="productName" name="product_name">
        </div>

        <div class="mb-3">
            <label for="bio" class="form-label">product description</label>
            <textarea name="description" class="form-control" id="description" cols="100">  {{old('bio') ?? $product->description}} </textarea>       
        </div>

    <button type="submit" class="btn btn-primary m-3">Update Data</button>
        
    </form>
</div>

@endsection