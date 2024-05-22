@extends('layouts.app')

@section('content')
    @include('partials.validation-errors')
    <div class="admin-pages-bg">
        <div class="container">
            <div class="row pt-5">
                <div class="col">
                    <h1 class="fw-bolder fs-1 admin-text-custom">Edit Characters</h1>
                </div>
                <!-- /.col -->
                <div class="col text-end">
                    <a class="back-button fw-bolder fs-2 text-decoration-none admin-text-custom pb-2"
                        href="{{ route('admin.characters.index') }}">
                        <i class="fa-solid fa-angles-left"></i>
                        Return to Characters</a>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <div class="row py-5">
                @include('partials.validation-errors')

                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body p-3 admin-text-custom better-view">
                                <form action="{{ route('admin.characters.update', $character) }}" method="post">
                                    @csrf
                                    @method('PUT')

                                    <div class="mb-3">
                                        <label for="full_name" class="form-label admin-text-custom">Full Name</label>
                                        <input type="text" class="form-control" name="full_name" id="full_name"
                                            aria-describedby="fullNameHelper" placeholder="Full Name"
                                            value="{{ $character->full_name }}" @error('full_name') is-invalid @enderror
                                            value="{{ old('full_name') }}" required />
                                        <small id="fullNameHelper" class="form-text text-muted">Type the full name</small>
                                        @error('full_name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="race" class="form-label admin-text-custom">Race</label>
                                        <input type="text" class="form-control" name="race" id="race"
                                            aria-describedby="raceHelper" placeholder="Race"
                                            value="{{ $character->race }}" />
                                        <small id="raceHelper" class="form-text text-muted">Type the race</small>
                                    </div>

                                    <div class="mb-3">
                                        <label for="sex" class="form-label admin-text-custom">Sex</label>
                                        <input type="text" class="form-control" name="sex" id="sex"
                                            aria-describedby="sexHelper" placeholder="Sex" value="{{ $character->sex }}" />
                                        <small id="sexHelper" class="form-text text-muted">Type the sex</small>
                                    </div>

                                    <div class="mb-3">
                                        <label for="age" class="form-label admin-text-custom">Age</label>
                                        <input type="text" class="form-control" name="age" id="age"
                                            aria-describedby="ageHelper" placeholder="Age" value="{{ $character->age }}" />
                                        <small id="ageHelper" class="form-text text-muted">Type the age</small>
                                    </div>

                                    <div class="mb-3">
                                        <label for="alignment" class="form-label admin-text-custom">Alignment</label>
                                        <input type="text" class="form-control" name="alignment" id="alignment"
                                            aria-describedby="alignmentHelper" placeholder="Alignment"
                                            value="{{ $character->alignment }}" />
                                        <small id="alignmentHelper" class="form-text text-muted">Type the alignment</small>
                                    </div>

                                    <div class="mb-3">
                                        <label for="health_points" class="form-label admin-text-custom">Health
                                            Points</label>
                                        <input type="text" class="form-control" name="health_points" id="health_points"
                                            aria-describedby="healthPointsHelper" placeholder="Health Points"
                                            value="{{ $character->health_points }}" />
                                        <small id="healthPointsHelper" class="form-text text-muted">Type the health
                                            points</small>
                                    </div>

                                    <div class="mb-3">
                                        <label for="class" class="form-label admin-text-custom">Class</label>
                                        <input type="text" class="form-control" name="class" id="class"
                                            aria-describedby="classHelper" placeholder="Class"
                                            value="{{ $character->class }}" />
                                        <small id="classHelper" class="form-text text-muted">Type the class</small>
                                    </div>

                                    <div class="mb-3">
                                        <label for="sub_class" class="form-label admin-text-custom">Sub-Class</label>
                                        <input type="text" class="form-control" name="sub_class" id="sub_class"
                                            aria-describedby="subClassHelper" placeholder="Sub-Class"
                                            value="{{ $character->sub_class }}" />
                                        <small id="subClassHelper" class="form-text text-muted">Type the sub-class</small>
                                    </div>

                                    <div class="mb-3">
                                        <label for="level" class="form-label admin-text-custom">Level</label>
                                        <input type="text" class="form-control" name="level" id="level"
                                            aria-describedby="levelHelper" placeholder="Level"
                                            value="{{ $character->level }}" />
                                        <small id="levelHelper" class="form-text text-muted">Type the level</small>
                                    </div>

                                    <div class="mb-3">
                                        <label for="armour_class" class="form-label admin-text-custom">Armour
                                            Class</label>
                                        <input type="text" class="form-control" name="armour_class" id="armour_class"
                                            aria-describedby="armourClassHelper" placeholder="Armour Class"
                                            value="{{ $character->armour_class }}" />
                                        <small id="armourClassHelper" class="form-text text-muted">Type the armour
                                            class</small>
                                    </div>

                                    <div class="mb-3">
                                        <label for="cd" class="form-label admin-text-custom">CD</label>
                                        <input type="text" class="form-control" name="cd" id="cd"
                                            aria-describedby="cdHelper" placeholder="CD" value="{{ $character->cd }}" />
                                        <small id="cdHelper" class="form-text text-muted">Type the CD</small>
                                    </div>

                                    <div class="mb-3">
                                        <label for="backstory" class="form-label admin-text-custom">Backstory</label>
                                        <textarea class="form-control" name="backstory" id="backstory" aria-describedby="backstoryHelper"
                                            placeholder="Backstory">{{ $character->backstory }}</textarea>
                                        <small id="backstoryHelper" class="form-text text-muted"> Type the
                                            backstory</small>
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
