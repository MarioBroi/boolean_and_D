@extends('layouts.app')

@section('content')
    @include('partials.validation-errors')
    <div class="container mt-5">
        <form action="{{ route('admin.items.update', $item) }}" method="post">
            @csrf

            @method('put')

            <div class="mb-3">
                <label for="" class="form-label">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                    aria-describedby="helpId" value="{{ $item->name }}" />
                <small id="helpId" class="form-text text-muted">Edit the item name</small>
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Type</label>
                <input type="text" class="form-control @error('type') is-invalid @enderror" name="type" id="type"
                    aria-describedby="helpId" value="{{ $item->type }}" />
                <small id="helpId" class="form-text text-muted">Edit the item type</small>
                @error('type')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Category</label>
                <input type="text" class="form-control @error('category') is-invalid @enderror" name="category"
                    id="category" aria-describedby="helpId" value="{{ $item->category }}" />
                <small id="helpId" class="form-text text-muted">Edit the item category</small>
                @error('category')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Weight</label>
                <input type="text" class="form-control @error('weight') is-invalid @enderror" name="weight"
                    id="weight" aria-describedby="helpId" value="{{ $item->weight }}" />
                <small id="helpId" class="form-text text-muted">Edit the item weight</small>
                @error('weight')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>


            <div class="mb-3">
                <label for="" class="form-label">Cost</label>
                <input type="text" class="form-control @error('cost') is-invalid @enderror" name="cost" id="cost"
                    aria-describedby="helpId" value="{{ $item->cost }}" />
                <small id="helpId" class="form-text text-muted">Edit the item cost</small>
                @error('cost')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Damage dice</label>
                <input type="text" class="form-control @error('cost') is-invalid @enderror" name="damage_dice"
                    id="damage_dice" aria-describedby="helpId" value="{{ $item->damage_dice }}" />
                <small id="helpId" class="form-text text-muted">Edit the item dice damage</small>
                @error('damage_dice')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">
                Invia
            </button>

        </form>
    </div>
@endsection
