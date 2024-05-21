@extends('layouts.app')

@section('content')
    @include('partials.validation-errors')
    <div class="characters">
        <div class="container py-5">
            <div class="py-4">
                <a class="characters-buttons" href="{{ route('character.index') }}"><i class="fa-solid fa-angles-left"></i>
                    Return to Characters</a>
            </div>
            <h1>Edit Character</h1>
            @include('partials.validation-errors')

            <div class="row">

                <div class="col-12 d-flex ">
                    <div class="card w-75 p-5 better-view border-0">
                        <form action="{{ route('character.update', $character) }}" method="post">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="full_name" class="form-label">Full Name</label>
                                <input type="text" class="form-control" name="full_name" id="full_name"
                                    aria-describedby="fullNameHelper" placeholder="Full Name"
                                    value="{{ $character->full_name }}" @error('full_name') is-invalid @enderror
                                    value="{{ old('full_name') }}" required />
                                <small id="fullNameHelper" class="form-text text-muted">Full Name</small>
                                @error('full_name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="race" class="form-label">Race</label>
                                <input type="text" class="form-control" name="race" id="race"
                                    aria-describedby="raceHelper" placeholder="Race" value="{{ $character->race }}" />
                                <small id="raceHelper" class="form-text text-muted">Race</small>
                            </div>

                            <div class="mb-3">
                                <label for="sex" class="form-label">Sex</label>
                                <input type="text" class="form-control" name="sex" id="sex"
                                    aria-describedby="sexHelper" placeholder="Sex" value="{{ $character->sex }}" />
                                <small id="sexHelper" class="form-text text-muted">Sex</small>
                            </div>

                            <div class="mb-3">
                                <label for="age" class="form-label">Age</label>
                                <input type="text" class="form-control" name="age" id="age"
                                    aria-describedby="ageHelper" placeholder="Age" value="{{ $character->age }}" />
                                <small id="ageHelper" class="form-text text-muted">Age</small>
                            </div>

                            <div class="mb-3">
                                <label for="alignment" class="form-label">Alignment</label>
                                <input type="text" class="form-control" name="alignment" id="alignment"
                                    aria-describedby="alignmentHelper" placeholder="Alignment"
                                    value="{{ $character->alignment }}" />
                                <small id="alignmentHelper" class="form-text text-muted">Alignment</small>
                            </div>

                            <div class="mb-3">
                                <label for="health_points" class="form-label">Health Points</label>
                                <input type="text" class="form-control" name="health_points" id="health_points"
                                    aria-describedby="healthPointsHelper" placeholder="Health Points"
                                    value="{{ $character->health_points }}" />
                                <small id="healthPointsHelper" class="form-text text-muted">Health Points</small>
                            </div>

                            <div class="mb-3">
                                <label for="class" class="form-label">Class</label>
                                <input type="text" class="form-control" name="class" id="class"
                                    aria-describedby="classHelper" placeholder="Class" value="{{ $character->class }}" />
                                <small id="classHelper" class="form-text text-muted">Class</small>
                            </div>

                            <div class="mb-3">
                                <label for="sub_class" class="form-label">Sub-Class</label>
                                <input type="text" class="form-control" name="sub_class" id="sub_class"
                                    aria-describedby="subClassHelper" placeholder="Sub-Class"
                                    value="{{ $character->sub_class }}" />
                                <small id="subClassHelper" class="form-text text-muted">Sub-Class</small>
                            </div>

                            <div class="mb-3">
                                <label for="level" class="form-label">Level</label>
                                <input type="text" class="form-control" name="level" id="level"
                                    aria-describedby="levelHelper" placeholder="Level"
                                    value="{{ $character->level }}" />
                                <small id="levelHelper" class="form-text text-muted">Level</small>
                            </div>

                            <div class="mb-3">
                                <label for="armour_class" class="form-label">Armour Class</label>
                                <input type="text" class="form-control" name="armour_class" id="armour_class"
                                    aria-describedby="armourClassHelper" placeholder="Armour Class"
                                    value="{{ $character->armour_class }}" />
                                <small id="armourClassHelper" class="form-text text-muted">Armour Class</small>
                            </div>

                            <div class="mb-3">
                                <label for="cd" class="form-label">CD</label>
                                <input type="text" class="form-control" name="cd" id="cd"
                                    aria-describedby="cdHelper" placeholder="CD" value="{{ $character->cd }}" />
                                <small id="cdHelper" class="form-text text-muted">CD</small>
                            </div>

                            <div class="mb-3">
                                <label for="backstory" class="form-label">Backstory</label>
                                <textarea class="form-control" name="backstory" id="backstory" aria-describedby="backstoryHelper"
                                    placeholder="Backstory">{{ $character->backstory }}</textarea>
                                <small id="backstoryHelper" class="form-text text-muted">Backstory</small>
                            </div>

                            <button type="submit" class="characters-buttons">
                                Update
                            </button>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- /.characters -->
@endsection
