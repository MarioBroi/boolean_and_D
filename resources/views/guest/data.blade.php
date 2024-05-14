@extends('layout.app')
@section('main-content')
    {{-- @dd($itemsData) --}}
    <div class="container">
        <div class="row">
            @forelse ($itemsData as $item)
                <div class="col">
                    <div class="card">
                        <img class="card-img-top" src="holder.js/100x180/" alt="Title" />
                        <div class="card-body">
                            <h4 class="card-title">{{ $item['category'] }}</h4>
                            <p class="card-text">Text</p>
                        </div>
                    </div>
                </div>
            @empty
                <h2>Card non presente</h2>
            @endforelse
        </div>
    </div>
@endsection
