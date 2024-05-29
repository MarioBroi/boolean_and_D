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

            <div class="row py-5">
                <div class="col">
                    <div class="card ">
                        <div class="card-body p-3 admin-text-custom better-view">
                            <form action="{{ route('admin.types.update', $type) }}" method="post">
                                @csrf
                                @method('put')

                                <div class="mb-3">
                                    <label for="" class="form-label admin-text-custom">Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" id="name" aria-describedby="helpId"
                                        value="{{ $type->name }}" />
                                    <small id="helpId" class="form-text text-muted">Type the type name</small>
                                    @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="desc" class="form-label admin-text-custom">Description</label>
                                    <input type="text" class="form-control @error('desc') is-invalid @enderror"
                                        name="desc" id="desc" aria-describedby="helpId"
                                        value="{{ $type->desc }}" />
                                    <small id="helpId" class="form-text text-muted">Type the type description</small>
                                    @error('desc')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <button type="submit" class="card-buttons-custom fs-5">
                                    Update
                                </button>

                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.admin-pages-bg -->
@endsection
