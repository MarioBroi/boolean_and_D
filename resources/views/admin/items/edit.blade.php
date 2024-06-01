@extends('layouts.app')

@section('content')
    @include('partials.validation-errors')
    <div class="admin-pages-bg">
        <div class="container">
            <div class="row pt-5">
                <div class="col">
                    <h1 class="fw-bolder fs-1 admin-text-custom">Edit Items</h1>
                </div>
                <!-- /.col -->
                <div class="col text-end">
                    <a class="back-button fw-bolder fs-2 text-decoration-none admin-text-custom pb-2"
                        href="{{ route('admin.items.index') }}">
                        <i class="fa-solid fa-angles-left"></i>
                        Return to Items</a>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <div class="row row-cols-2 py-5">
                <div class="col">
                    <form action="{{ route('admin.items.update', $item) }}" method="post" class="better-view">
                        @csrf
                        @method('put')

                        <div class="mb-3">
                            <label for="" class="form-label admin-text-custom">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                id="name" aria-describedby="helpId" value="{{ $item->name }}" />
                            <small id="helpId" class="form-text text-muted">Type the item name</small>
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <!-- /.name -->

                        <div class="mb-3">
                            <label for="" class="form-label admin-text-custom">Type</label>
                            <input type="text" class="form-control @error('type') is-invalid @enderror" name="type"
                                id="type" aria-describedby="helpId" value="{{ $item->type }}" />
                            <small id="helpId" class="form-text text-muted">Type the item type</small>
                            @error('type')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <!-- /.type -->

                        <div class="mb-3">
                            <label for="" class="form-label admin-text-custom">Category</label>
                            <input type="text" class="form-control @error('category') is-invalid @enderror"
                                name="category" id="category" aria-describedby="helpId" value="{{ $item->category }}" />
                            <small id="helpId" class="form-text text-muted">Type the item category</small>
                            @error('category')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <!-- /.category -->

                    </form>
                    <!-- /form -->
                </div>
                <!-- /.col -->

                <div class="col">

                    <form action="{{ route('admin.items.update', $item) }}" method="post" class="better-view">
                        @csrf
                        @method('put')

                        <div class="mb-3">
                            <label for="" class="form-label admin-text-custom">Weight</label>
                            <input type="text" class="form-control @error('weight') is-invalid @enderror" name="weight"
                                id="weight" aria-describedby="helpId" value="{{ $item->weight }}" />
                            <small id="helpId" class="form-text text-muted">Type the item weight</small>
                            @error('weight')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <!-- /.weight -->

                        <div class="mb-3">
                            <label for="" class="form-label admin-text-custom">Cost</label>
                            <input type="text" class="form-control @error('cost') is-invalid @enderror" name="cost"
                                id="cost" aria-describedby="helpId" value="{{ $item->cost }}" />
                            <small id="helpId" class="form-text text-muted">Type the item cost</small>
                            @error('cost')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <!-- /.cost -->

                        <div class="mb-3">
                            <label for="" class="form-label admin-text-custom">Damage dice</label>
                            <input type="text" class="form-control @error('cost') is-invalid @enderror"
                                name="damage_dice" id="damage_dice" aria-describedby="helpId"
                                value="{{ $item->damage_dice }}" />
                            <small id="helpId" class="form-text text-muted">Type the item dice damage</small>
                            @error('damage_dice')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <!-- /.damage-dice -->
                    </form>
                    <!-- /form -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <form action="{{ route('admin.items.update', $item) }}" method="post" class="text-center">
                @csrf
                @method('put')
                <button type="submit" class="card-buttons-custom mb-5 px-5 py-3 fw-bold">
                    Update
                </button>
            </form>
            <!-- /form -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.admin-pages-bg -->
@endsection
