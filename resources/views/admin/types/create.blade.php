@extends('layouts.app')

@section('content')
    <div class="admin-pages-bg vh-100">

        <div class="container pt-5">

            <h1>New type</h1>

            <form action="{{ route('admin.types.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        id="name" aria-describedby="helpId" placeholder="Name" value="{{ old('name') }}" />
                    <small id="helpId" class="form-text text-muted">Type the name of the new type</small>
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <!-- /.name -->

                <div class="mb-3">
                    <label for="desc" class="form-label">Description</label>
                    <input type="text" class="form-control @error('desc') is-invalid @enderror" name="desc"
                        id="desc" aria-describedby="helpId" placeholder="..." value="{{ old('desc') }}" />
                    <small id="helpId" class="form-text text-muted">Type the description of the type</small>
                    @error('type')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <!-- /.description -->

                <button type="submit" class="card-buttons-custom mb-5">
                    Create
                </button>

            </form>
        </div>
    </div>
    <!-- /.admin-pages-bg -->
@endsection
