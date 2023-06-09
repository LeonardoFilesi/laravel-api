@extends('layouts.admin')

@section('content')
    <h1>Oh Ciao {{ Auth::user()->name }}</h1>
@endsection