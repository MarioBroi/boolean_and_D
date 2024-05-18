@extends('layout.app')

@section('main-content')
    <div class="container">
        <div class="container py-5">
            <div class="row">
                <section class="">
                    <h1>New Character</h1>
                    @include('partials.validation-errors')

                    <div class="col-5 d-flex ">
                        <div class="card p-5">
                            <form action="{{ route('characters.store') }}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" name="name" id="name"
                                        @error('name') is-invalid @enderror aria-describedby="nameHelper" placeholder="Name"
                                        value="{{ old('name') }}" required />
                                    <small id="helpId" class="form-text text-muted">Name </small>
                                </div>

                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <input type="text" class="form-control" name="description" id="description"
                                        @error('description') is-invalid @enderror aria-describedby="descriptionHelper"
                                        placeholder="Description" value="{{ old('description') }}" />
                                    <small id="helpId" class="form-text text-muted">Description</small>
                                </div>

                                <div class="mb-3">
                                    <label for="attack" class="form-label">Attack</label>
                                    <input type="text" class="form-control" name="attack" id="attack"
                                        @error('attack') is-invalid @enderror aria-describedby="attackHelper"
                                        placeholder="Attack" value="{{ old('attack') }}" />
                                    <small id="helpId" class="form-text text-muted">Attak</small>
                                </div>

                                <div class="mb-3">
                                    <label for="defense" class="form-label">Defense</label>
                                    <input type="text" class="form-control" name="defense" id="defense"
                                        @error('defense') is-invalid @enderror aria-describedby="defenseHelper"
                                        placeholder="Defense" value="{{ old('defense') }}" />
                                    <small id="helpId" class="form-text text-muted">Defense</small>
                                </div>

                                <div class="mb-3">
                                    <label for="speed" class="form-label">Speed</label>
                                    <input type="text" class="form-control" name="speed" id="speed"
                                        @error('speed') is-invalid @enderror aria-describedby="speedHelper"
                                        placeholder="Speed" value="{{ old('speed') }}" />
                                    <small id="helpId" class="form-text text-muted">Speed</small>
                                </div>

                                <button type="submit" class="btn btn-primary">
                                    Create
                                </button>

                            </form>
                        </div>
                    </div>
                </section>
            </div>

        </div>
    </div>
@endsection
