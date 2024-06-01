@extends('layouts.app')

@section('content')
    @include('partials.validation-errors')
    <div class="admin-pages-bg">
        <div class="container py-5">
            <h1 class="admin-text-custom fw-bolder">New Item</h1>
            <div class="row row-cols-2">
                <div class="col">
                    <form action="{{ route('admin.items.store') }}" method="post" class="better-view">
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
                        <!-- /.name -->

                        <div class="mb-3">
                            <label for="" class="form-label">Type</label>
                            <input type="text" class="form-control @error('type') is-invalid @enderror" name="type"
                                id="type" aria-describedby="helpId" placeholder="Type" value="{{ old('type') }}" />
                            <small id="helpId" class="form-text text-muted">Type the type of the item</small>
                            @error('type')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <!-- /.type -->

                        <div class="mb-3">
                            <label for="" class="form-label">Category</label>
                            <input type="text" class="form-control @error('category') is-invalid @enderror"
                                name="category" id="category" aria-describedby="helpId" placeholder="Category"
                                value="{{ old('category') }}" />
                            <small id="helpId" class="form-text text-muted">Type the category of the item</small>
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
                    <form action="{{ route('admin.items.store') }}" method="post" class="better-view">
                        @csrf

                        <div class="mb-3">
                            <label for="" class="form-label">Weight</label>
                            <input type="text" class="form-control @error('weight') is-invalid @enderror" name="weight"
                                id="weight" aria-describedby="helpId" placeholder="Weight" value="{{ old('weight') }}" />
                            <small id="helpId" class="form-text text-muted">Type the weight of the item</small>
                            @error('weight')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <!-- /.weight -->

                        <div class="mb-3">
                            <label for="" class="form-label">Cost</label>
                            <input type="text" class="form-control @error('cost') is-invalid @enderror" name="cost"
                                id="cost" aria-describedby="helpId" placeholder="Cost" value="{{ old('cost') }}" />
                            <small id="helpId" class="form-text text-muted">Type the cost of the item</small>
                            @error('cost')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <!-- /.cost -->

                        <div class="mb-3">
                            <label for="" class="form-label">Damage dice</label>
                            <input type="text" class="form-control @error('cost') is-invalid @enderror"
                                name="damage_dice" id="damage_dice" aria-describedby="helpId" placeholder="Damage"
                                value="{{ old('damage_dice') }}" />
                            <small id="helpId" class="form-text text-muted">Type the dice damage of the item</small>
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

            <form action="{{ route('admin.items.store') }}" method="post" class="text-center">
                @csrf
                <button type="submit" class="card-buttons-custom mt-2 px-5 py-3 fw-bold">
                    Create
                </button>
            </form>
            <!-- /form -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.admin-pages-bg -->
@endsection
