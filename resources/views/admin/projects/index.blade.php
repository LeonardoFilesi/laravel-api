@extends('layouts.admin')

@section('content')
    <h1>Lista dei Progetti</h1>

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="">
        
    </form>

@endsection