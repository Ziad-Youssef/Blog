@extends('layouts.app')

@section('body')
<div class="container">
    <h1>{{$category->category_name}} Information</h1>
    <a href="{{url()->previous()}}">Back</a>
</div>
@endsection