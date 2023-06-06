@extends('layouts.admin')

@section('content')
    <h2>Modifica un progetto</h2>

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{route('admin.project.update', $project->slug)}}">
        @csrf
        
    </form>

@endsection