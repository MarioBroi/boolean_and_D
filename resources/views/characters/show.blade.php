@extends('layout.app')

@section('main-content')
    <div class="container">
        <div class="row row-cols-4 row-cols-lg-6 py-3 g-4">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">{{ $character->name }}</h4>
                        <p class="card-text">{{ $character->type }}</p>
                    </div>
                </div>
                {{-- /.card --}}
            </div>
            {{-- /.col --}}

        </div>
        {{-- /.row --}}
    </div>
    {{-- /.container --}}
@endsection
