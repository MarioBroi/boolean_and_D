@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card w-25 mt-5 mb-2">
                    <div class="card-body">
                        <h4 class="card-title">{{ $item->name }}</h4>
                        <p class="card-text">Type: {{ $item->type }}</p>
                        <p class="card-text">Category: {{ $item->category }}</p>
                        <p class="card-text">Weigth: {{ $item->weight }}</p>
                        <p class="card-text">Price: {{ $item->cost }}</p>
                        <p class="card-text">Damage dice: {{ $item->damage_dice }}</p>
                    </div>
                </div>
                <a href="{{ route('admin.items.index') }}" class="btn btn-primary mb-5">Back</a>
            </div>
        </div>
    </div>
@endsection
