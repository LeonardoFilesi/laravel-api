@extends('layouts.admin')

@section('content')
    <h2>Crea un nuovo progetto</h2>

    @include('partials.errors')

    <form action="{{ route('admin.projects.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Contentuto</label>
            <textarea class="form-control" id="content" rows="3" name="content">{{ old('content') }}</textarea>
        </div>

              {{-- immagine --}}
              <div class="my-3 w-50 mx-auto">
                <label for="image-input" class="form-label">Carica immagine</label>
                <input type="file" class="form-control" id="image-input" name="image">
                {{-- preview --}}
                <div class="d-flex justify-content-center my-3">
                    <img class="d-none" id="image-preview" src="" alt="">
                </div>
            </div>


        <button class="btn btn-primary" type="submit">Invia</button>
    </form>

@endsection