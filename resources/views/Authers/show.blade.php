@extends('layouts.app')

@section('body')
<div class="container">
    <h1>{{$auther->auther_name}} Information</h1>
    <p>Nationality is {{$auther->auther_country}} , His name is {{$auther->auther_name}}</p>
    <h2>Bio</h2>
    <p>{{$auther->bio === null ? 'There is no information' : $auther->bio }}</p>
    <a href="{{url()->previous()}}">Back</a>
</div>
@endsection