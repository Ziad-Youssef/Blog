@extends('layouts.app')

@section('body')
<div class="container">
    <h1>{{$product->product_name}} Information</h1>
   
    <h2>Description</h2>
    <p>{{$product->description === null ? 'There is no information' : $product->description }}</p>
    <a href="{{url()->previous()}}">Back</a>
</div>
@endsection