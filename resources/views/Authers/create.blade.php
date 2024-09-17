@extends('layouts.app')

@section('body')
    <h1>Create New Auther</h1>

   

    <form action=" {{ route('auther.store') }}" method="POST">

        @csrf
        <div class="mb-3">
            <label for="autherName" class="form-label">Auther name</label>
            <input type="text" value="{{old('auther_name')}}" class="form-control" id="autherName" name="auther_name">
        </div>

        @error('auther_name')
        <div class="alert alert-warning alert-danger fade show" role="alert">
            {{$message}}
            <button type="button" class="btn-close " data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @enderror

        <div class="mb-3">
            <label for="bio" class="form-label">Auther bio</label>
            <textarea name="bio" class="form-control" id="bio" cols="100">  {{old('bio')}} </textarea>       
        </div>
        @error('bio')
        <div class="alert alert-warning alert-danger fade show" role="alert">
            {{$message}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @enderror

    <button type="submit" class="btn btn-primary m-3">Save</button>
        
    </form>

@endsection