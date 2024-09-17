@extends('layouts.app')

@section('body')
<div class="container">
    <h1>Edit category</h1>

   

    <form action="{{ route('category.update',['category'=>$category->id]) }}" method="POST">

        @csrf
        @method('put')
        <div class="mb-3">
            <label for="categoryName" class="form-label">category name</label>
            <input type="text" value="{{old('category_name') ?? $category->category_name}}" class="form-control" id="categoryName" name="category_name">
        </div>

    <button type="submit" class="btn btn-primary m-3">Update Data</button>
        
    </form>
</div>

@endsection