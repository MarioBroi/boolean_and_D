@extends('layouts.app')

@section('content')
    @include('partials.validation-errors')
    <div class="admin-pages-bg vh-100">

        <div class="container pt-5">

            <h1>New Item</h1>

            <form action="{{ route('admin.items.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        id="name" aria-describedby="helpId" placeholder="Name" value="{{ old('name') }}" />
                    <small id="helpId" class="form-text text-muted">Type the name of the item</small>
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Type</label>
                    <input type="text" class="form-control @error('type') is-invalid @enderror" name="type"
                        id="type" aria-describedby="helpId" placeholder="Type" value="{{ old('type') }}" />
                    <small id="helpId" class="form-text text-muted">Type the type of the item</small>
                    @error('type')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Category</label>
                    <input type="text" class="form-control @error('category') is-invalid @enderror" name="category"
                        id="category" aria-describedby="helpId" placeholder="Category" value="{{ old('category') }}" />
                    <small id="helpId" class="form-text text-muted">Type the category of the item</small>
                    @error('category')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Weight</label>
                    <input type="text" class="form-control @error('weight') is-invalid @enderror" name="weight"
                        id="weight" aria-describedby="helpId" placeholder="Weight" value="{{ old('weight') }}" />
                    <small id="helpId" class="form-text text-muted">Type the weight of the item</small>
                    @error('weight')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>


                <div class="mb-3">
                    <label for="" class="form-label">Cost</label>
                    <input type="text" class="form-control @error('cost') is-invalid @enderror" name="cost"
                        id="cost" aria-describedby="helpId" placeholder="Cost" value="{{ old('cost') }}" />
                    <small id="helpId" class="form-text text-muted">Type the cost of the item</small>
                    @error('cost')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Damage dice</label>
                    <input type="text" class="form-control @error('cost') is-invalid @enderror" name="damage_dice"
                        id="damage_dice" aria-describedby="helpId" placeholder="Damage" value="{{ old('damage_dice') }}" />
                    <small id="helpId" class="form-text text-muted">Type the dice damage of the item</small>
                    @error('damage_dice')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-dark btn-lg mb-5">
                    Create
                </button>

            </form>
        </div>
    </div>
    <!-- /.admin-pages-bg -->
@endsection
