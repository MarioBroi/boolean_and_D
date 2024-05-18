@extends('layout.app')

@section('main-content')
    <div class="container mt-5">
        <form action="{{ route('item.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                    aria-describedby="helpId" placeholder="Inserisci il Nome del tuo oggetto" value="{{ old('name') }}" />
                <small id="helpId" class="form-text text-muted">Help text</small>
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="" class="form-label">slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" id="slug"
                    aria-describedby="helpId" placeholder="Inserisci il Nome del tuo oggetto" value="{{ old('slug') }}" />
                <small id="helpId" class="form-text text-muted">Help text</small>
                @error('slug')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="" class="form-label">type</label>
                <input type="text" class="form-control @error('type') is-invalid @enderror" name="type" id="type"
                    aria-describedby="helpId" placeholder="Inserisci il Nome del tuo oggetto" value="{{ old('type') }}" />
                <small id="helpId" class="form-text text-muted">Help text</small>
                @error('type')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="" class="form-label">category</label>
                <input type="text" class="form-control @error('category') is-invalid @enderror" name="category"
                    id="category" aria-describedby="helpId" placeholder="Inserisci il Nome del tuo oggetto"
                    value="{{ old('category') }}" />
                <small id="helpId" class="form-text text-muted">Help text</small>
                @error('category')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="" class="form-label">weight</label>
                <input type="text" class="form-control @error('weight') is-invalid @enderror" name="weight"
                    id="weight" aria-describedby="helpId" placeholder="Inserisci il Nome del tuo oggetto"
                    value="{{ old('weight') }}" />
                <small id="helpId" class="form-text text-muted">Help text</small>
                @error('weight')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>


            <div class="mb-3">
                <label for="" class="form-label">cost</label>
                <input type="text" class="form-control @error('cost') is-invalid @enderror" name="cost" id="cost"
                    aria-describedby="helpId" placeholder="Inserisci il Nome del tuo oggetto"
                    value="{{ old('cost') }}" />
                <small id="helpId" class="form-text text-muted">Help text</small>
                @error('cost')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="" class="form-label">damage dice</label>
                <input type="text" class="form-control @error('cost') is-invalid @enderror" name="damage_dice"
                    id="damage_dice" aria-describedby="helpId" placeholder="Inserisci il Nome del tuo oggetto"
                    value="{{ old('damage_dice') }}" />
                <small id="helpId" class="form-text text-muted">Help text</small>
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
