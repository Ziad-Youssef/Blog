@extends('layouts.app')

@section('body')
    <h1>Create New Category</h1>

   

    <form action=" {{ route('category.store') }}" method="POST">

        @csrf
        <div class="mb-3">
            <label for="categoryName" class="form-label">Category name</label>
            <input type="text" value="{{old('category_name')}}" class="form-control" id="categoryName" name="category_name">
        </div>

        @error('category_name')
        <div class="alert alert-warning alert-danger fade show" role="alert">
            {{$message}}
            <button type="button" class="btn-close " data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @enderror
        
    <button type="submit" class="btn btn-primary m-3">Save</button>
        
    </form>

@endsection