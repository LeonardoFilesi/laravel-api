@extends('layouts.admin')

@section('content')
    <h2>Modifica un progetto {{ $project->title }}</h2>

    @include('partials.errors')

    <form method="POST" action="{{route('admin.projects.update', $project->slug)}}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $project->title) }}">
        </div>

       {{--  <div class="form-group">
            <label for="type">Type</label>
            <select name="type_id" id="type" class="form-control">
                @foreach ($types as $type)
                    <option value="{{ $type->id }}" {{ old('type_id') == $type->id ? 'selected' : '' }}>
                        {{ $type->name }}
                    </option>
                @endforeach
            </select>
        </div> --}}
            
        <div class="mb-3">
            <label for="content" class="form-label">Contentuto</label>
            <textarea class="form-control" id="content" rows="3" name="content">{{ old('content', $project->content) }}</textarea>
        </div>
        <button class="btn btn-primary" type="submit">Invia</button>
    </form>

@endsection