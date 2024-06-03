@extends('layouts.app')

@section('content')
    @include('partials.validation-errors')
    <div class="admin-pages-bg">
        <div class="container">
            <div class="row pt-5">
                <div class="col">
                    <h1 class="fw-bolder fs-1 admin-text-custom">Edit Types</h1>
                </div>
                <!-- /.col -->
                <div class="col text-end">
                    <a class="back-button fw-bolder fs-2 text-decoration-none admin-text-custom pb-2"
                        href="{{ route('admin.types.index') }}">
                        <i class="fa-solid fa-angles-left"></i>
                        Return to Types</a>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            @include('partials.validation-errors')

            <div class="row row-cols-2 py-5">

                <div class="col">

                    <form action="{{ route('admin.types.update', $type) }}" method="post" class="better-view">
                        @csrf
                        @method('put')

                        <div class="mb-3">
                            <label for="" class="form-label fw-bold admin-text-custom">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                id="name" aria-describedby="helpId" value="{{ old('name', $type->name) }}" />
                            <small id="helpId" class="form-text text-muted">Type the type name</small>
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <!-- /.name -->
                    </form>
                    <!-- /form -->
                </div>
                <!-- /.col -->

                <div class="col">

                    <form action="{{ route('admin.types.update', $type) }}" method="post" class="better-view">
                        @csrf
                        @method('put')

                        <div class="mb-3">
                            <label for="desc" class="form-label fw-bold admin-text-custom">Description</label>
                            <textarea class="form-control character-text" name="desc" id="desc" @error('desc') is-invalid @enderror
                                aria-describedby="descHelper" placeholder="..." style="height: 200px">{{ old('desc', $type->desc) }}</textarea>
                            <small id="helpId" class="form-text text-muted">Type the type description</small>
                            @error('desc')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <!-- /.description -->

                    </form>
                    <!-- /form -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <form action="{{ route('admin.types.update', $type) }}" method="post" class="text-center">
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
