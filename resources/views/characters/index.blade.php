@extends('layout.app')

@section('main-content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center py-3">
            <h2>Characters</h2>
            <a class="btn btn-primary" href="{{ route('characters.create') }}">Add</a>
        </div>
        <div class="row row-cols-4 row-cols-lg-6 py-3 g-4">
            @forelse ($characters as $character)
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">{{ $character->name }}</h4>
                            <p class="card-text">{{ $character->type }}</p>
                            <a href="{{ route('characters.show', $character) }}">Views</a>
                        </div>
                    </div>
                    {{-- /.card --}}
                </div>
                {{-- /.col --}}
            @empty
                <div class="col">
                    <div class="card">
                        <h4 class="card-title">Sorry, nothing to display</h4>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            @endforelse
        </div>
        {{-- /.row --}}
    </div>
    {{-- /.container --}}
@endsection
