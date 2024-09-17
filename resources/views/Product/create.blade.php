@extends('layouts.app')

@section('body')
    <h1>Create New Product</h1>

   

    <form action=" {{ route('product.store') }}" method="POST">

        @csrf
        <div class="mb-3">
            <label for="productName" class="form-label">Product name</label>
            <input type="text" value="{{old('product_name')}}" class="form-control" id="productName" name="product_name">
        </div>

        @error('product_name')
        <div class="alert alert-warning alert-danger fade show" role="alert">
            {{$message}}
            <button type="button" class="btn-close " data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @enderror




        <div class="mb-3">
            <label for="productPrice" class="form-label">Product price</label>
            <input type="number" value="{{old('product_price')}}" class="form-control" id="productPrice" name="product_price">
        </div>

        @error('product_price')
        <div class="alert alert-warning alert-danger fade show" role="alert">
            {{$message}}
            <button type="button" class="btn-close " data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @enderror




        <div class="mb-3">
            <label for="description" class="form-label">Product Description</label>
            <textarea name="description" class="form-control" id="description" cols="100">  {{old('description')}} </textarea>       
        </div>
        @error('description')
        <div class="alert alert-warning alert-danger fade show" role="alert">
            {{$message}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @enderror

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="productAuther" class="form-label">Product Auther</label>
                <select  class="form-select" id="productAuther" name="product_auther">
                    <option>Select Auther</option>
@foreach ($authers as $auther)
    <option {{old('product_auther') === $auther->id ? 'selected':''}} value="{{$auther->id}}">{{$auther->auther_name}}</option>
@endforeach

                </select>

            </div>
    


            <div class="col-md-6">
                <label for="productCategory" class="form-label">Product Category</label>
                <select  class="form-select" id="productCategory" name="product_category">
                    <option>Select Category</option>
                    @foreach ($categories as $category)
                       <option {{old('product_category') === $category->id ? 'selected':''}} value="{{$category->id}}">{{$category->category_name}}</option> 
                    @endforeach
                </select>

            </div>
        </div>

    <button type="submit" class="btn btn-primary m-3">Save</button>
        
    </form>

@endsection