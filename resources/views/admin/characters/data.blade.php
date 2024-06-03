@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row row-cols-3 row-cols-lg-4 py-3 g-4">
            @forelse ($itemsData as $item)
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Name: {{ $item['name'] }}</h4>
                            <p class="card-text">Category: {{ $item['category'] }}</p>
                            <p class="card-text">Type: {{ $item['type'] }}</p>
                            <p class="card-text">Category: {{ $item['category'] }}</p>
                            <p class="card-text">Price: {{ $item['cost'] }}</p>
                            <p class="card-text">Damage: {{ $item['damage_dice'] }}</p>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            @empty
                <h2>Card non presente</h2>
            @endforelse
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
@endsection
