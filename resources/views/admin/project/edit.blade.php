@extends('layouts.admin')

@section('content')
    <h1 class="text-center">Modifica progetto</h1>

    <div class="container my-3">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <form action="{{ route('admin.projects.update', $project) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Titolo progetto</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" required
                    value="{{ old('title', $project->title) }}">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Linguaggio utilizzato</label>
                <input type="text" class="form-control @error('language') is-invalid @enderror" name="language" required
                    value="{{ old('language', $project->language) }}">
                @error('language')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Frameworks utilizzati</label>
                <input type="text" class="form-control @error('frameworks') is-invalid @enderror" name="frameworks"
                    value="{{ old('frameworks', $project->frameworks) }}">
                @error('frameworks')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Stato</label>
                <input type="text" class="form-control @error('status') is-invalid @enderror" name="status"
                    value="{{ old('status', $project->status) }}">
                @error('status')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Data Inizio</label>
                <input type="date" class="form-control" name="start_date"
                    value="{{ old('start_date', $project->start_date) }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Descrizione</label>
                <textarea class="form-control" name="description" id="" cols="30" rows="10">{{ old('description', $project->description) }}</textarea>
            </div>

            <div class="mb-3 d-flex justify-content-between ">
                <button type="submit" class="btn btn-primary">Modifica</button>
                <a class="btn btn-dark" href="{{ route('admin.projects.index') }}">Torna alla lista</a>
            </div>
        </form>
    </div>
@endsection
