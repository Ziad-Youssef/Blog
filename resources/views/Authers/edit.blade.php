@extends('layouts.app')

@section('body')
<div class="container">
    <h1>Edit Auther</h1>

   

    <form action="{{ route('auther.update',['auther'=>$auther->id]) }}" method="POST">

        @csrf
        @method('put')
        <div class="mb-3">
            <label for="autherName" class="form-label">Auther name</label>
            <input type="text" value="{{old('auther_name') ?? $auther->auther_name}}" class="form-control" id="autherName" name="auther_name">
        </div>

        <div class="mb-3">
            <label for="bio" class="form-label">Auther bio</label>
            <textarea name="bio" class="form-control" id="bio" cols="100">  {{old('bio') ?? $auther->bio}} </textarea>       
        </div>

    <button type="submit" class="btn btn-primary m-3">Update Data</button>
        
    </form>
</div>

@endsection