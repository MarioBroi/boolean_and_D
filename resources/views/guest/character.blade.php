@extends('layout.app')

@section('main-content')
    <div class="container">
        <div class="row row-cols-4 row-cols-lg-6 py-3 g-4">
            @forelse (as)
                <div class="col">
                    <div class="card">
                        <img class="card-img-top" src="holder.js/100x180/" alt="Title" />
                        <div class="card-body">
                            <h4 class="card-title">Title</h4>
                            <p class="card-text">Text</p>
                        </div>
                    </div>
                    {{-- /.card --}}
                </div>
                {{-- /.col --}}
            @empty
            @endforelse
        </div>
        {{-- /.row --}}
    </div>
    {{-- /.container --}}
@endsection
