@extends('layout.app')

@section('main-content')
    <div class="container">
        <div class="container py-5">
            <div class="row">
                <section class="">
                    <div class="col-5 d-flex ">
                        <div class="card p-5">
                            <form action="{{ route('characters.store') }}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" name="name" id="name"
                                        aria-describedby="nameHelper" placeholder="Name" />
                                    <small id="helpId" class="form-text text-muted">Name </small>
                                </div>

                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <input type="text" class="form-control" name="description" id="description"
                                        aria-describedby="descriptionHelper" placeholder="Description" />
                                    <small id="helpId" class="form-text text-muted">Description</small>
                                </div>

                                <div class="mb-3">
                                    <label for="attack" class="form-label">Attack</label>
                                    <input type="text" class="form-control" name="attack" id="attack"
                                        aria-describedby="attackHelper" placeholder="Attack" />
                                    <small id="helpId" class="form-text text-muted">Attak</small>
                                </div>

                                <div class="mb-3">
                                    <label for="defense" class="form-label">Defense</label>
                                    <input type="text" class="form-control" name="defense" id="defense"
                                        aria-describedby="defenseHelper" placeholder="Defense" />
                                    <small id="helpId" class="form-text text-muted">Defense</small>
                                </div>

                                <div class="mb-3">
                                    <label for="speed" class="form-label">Speed</label>
                                    <input type="text" class="form-control" name="speed" id="speed"
                                        aria-describedby="speedHelper" placeholder="Speed" />
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
