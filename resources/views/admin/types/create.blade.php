@extends('layouts.app')

@section('content')
    @include('partials.validation-errors')
    <div class="admin-pages-bg vh-100">

        <div class="container py-5">

            <h1 class="admin-text-custom fw-bolder">New Type</h1>

            <div class="row">
                <div class="col">
                    <form action="{{ route('admin.types.store') }}" method="post" class="better-view">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label fw-bold">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                id="name" aria-describedby="helpId" placeholder="Name" value="{{ old('name') }}" />
                            <small id="helpId" class="form-text text-muted">Type the name of the new type</small>
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <!-- /.name -->
                    </form>
                </div>
                <!-- /.col -->
                <div class="col">
                    <form action="{{ route('admin.types.store') }}" method="post" class="better-view">
                        @csrf
                        <div class="mb-3">
                            <label for="desc" class="form-label fw-bold">Description</label>
                            <textarea class="form-control character-text" name="desc" id="desc" @error('desc') is-invalid @enderror
                                aria-describedby="descHelper" placeholder="...">{{ old('desc') }}</textarea>
                            <small id="helpId" class="form-text text-muted">Type the description of the type</small>
                            @error('type')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <!-- /.description -->
                    </form>
                </div>
                <!-- /.col -->

            </div>
            <!-- /.row -->

            <form action="{{ route('admin.types.store') }}" method="post" class="text-center">
                @csrf
                <button type="submit" class="card-buttons-custom mt-2 px-5 py-3 fw-bold">
                    Create
                </button>
            </form>

        </div>
        <!-- /.admin-pages-bg -->
    @endsection
