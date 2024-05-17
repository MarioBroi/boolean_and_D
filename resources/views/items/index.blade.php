@extends('layout.app')

@section('main-content')
    <div class="container">
        <div class="row">
            <a class="btn btn-primary" href="{{ route('item.create') }}">Add</a>
            @foreach ($items as $item)
                <div class="col-3 g-5">
                    <div class="card">
                        <img class="card-img-top" src="holder.js/100x180/" alt="Title" />
                        <div class="card-body">
                            <h4 class="card-title">{{ $item->name }}</h4>
                            <p class="card-text">{{ $item->type }}</p>
                            <p class="card-text">{{ $item->slug }}</p>
                            <p class="card-text">{{ $item->category }}</p>
                            <p class="card-text">Peso: {{ $item->weight }}</p>
                            <p class="card-text">Costo {{ $item->cost }}</p>
                            <p class="card-text"><a href="{{ route('item.show', ['item' => $item->id]) }}">Show</a>
                            </p>
                        </div>
                    </div>

                </div>
            @endforeach

        </div>
    </div>
@endsection
