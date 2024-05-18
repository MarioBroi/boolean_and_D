@extends('layout.app')

@section('main-content')
    <div class="container">
        <div class="container py-5">
            <div class="row">

                <h1>New Character</h1>
                @include('partials.validation-errors')

                <div class="col d-flex">
                    <div class="card p-5">
                        <form action="{{ route('character.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="full_name" class="form-label">Full Name</label>
                                <input type="text" class="form-control" name="full_name" id="full_name"
                                    @error('full_name') is-invalid @enderror aria-describedby="fullNameHelper"
                                    placeholder="Full Name" value="{{ old('full_name') }}" required />
                                <small id="fullNameHelper" class="form-text text-muted">Full Name</small>
                            </div>

                            <div class="mb-3">
                                <label for="race" class="form-label">Race</label>
                                <input type="text" class="form-control" name="race" id="race"
                                    @error('race') is-invalid @enderror aria-describedby="raceHelper" placeholder="Race"
                                    value="{{ old('race') }}" />
                                <small id="raceHelper" class="form-text text-muted">Race</small>
                            </div>

                            <div class="mb-3">
                                <label for="sex" class="form-label">Sex</label>
                                <input type="text" class="form-control" name="sex" id="sex"
                                    @error('sex') is-invalid @enderror aria-describedby="sexHelper" placeholder="Sex"
                                    value="{{ old('sex') }}" />
                                <small id="sexHelper" class="form-text text-muted">Sex</small>
                            </div>

                            <div class="mb-3">
                                <label for="age" class="form-label">Age</label>
                                <input type="text" class="form-control" name="age" id="age"
                                    @error('age') is-invalid @enderror aria-describedby="ageHelper" placeholder="Age"
                                    value="{{ old('age') }}" />
                                <small id="ageHelper" class="form-text text-muted">Age</small>
                            </div>

                            <div class="mb-3">
                                <label for="alignment" class="form-label">Alignment</label>
                                <input type="text" class="form-control" name="alignment" id="alignment"
                                    @error('alignment') is-invalid @enderror aria-describedby="alignmentHelper"
                                    placeholder="Alignment" value="{{ old('alignment') }}" />
                                <small id="alignmentHelper" class="form-text text-muted">Alignment</small>
                            </div>

                            <div class="mb-3">
                                <label for="health_points" class="form-label">Health Points</label>
                                <input type="text" class="form-control" name="health_points" id="health_points"
                                    @error('health_points') is-invalid @enderror aria-describedby="healthPointsHelper"
                                    placeholder="Health Points" value="{{ old('health_points') }}" />
                                <small id="healthPointsHelper" class="form-text text-muted">Health Points</small>
                            </div>

                            <div class="mb-3">
                                <label for="class" class="form-label">Class</label>
                                <input type="text" class="form-control" name="class" id="class"
                                    @error('class') is-invalid @enderror aria-describedby="classHelper" placeholder="Class"
                                    value="{{ old('class') }}" />
                                <small id="classHelper" class="form-text text-muted">Class</small>
                            </div>

                            <div class="mb-3">
                                <label for="sub_class" class="form-label">Sub-Class</label>
                                <input type="text" class="form-control" name="sub_class" id="sub_class"
                                    @error('sub_class') is-invalid @enderror aria-describedby="subClassHelper"
                                    placeholder="Sub-Class" value="{{ old('sub_class') }}" />
                                <small id="subClassHelper" class="form-text text-muted">Sub-Class</small>
                            </div>

                            <div class="mb-3">
                                <label for="level" class="form-label">Level</label>
                                <input type="text" class="form-control" name="level" id="level"
                                    @error('level') is-invalid @enderror aria-describedby="levelHelper"
                                    placeholder="Level" value="{{ old('level') }}" />
                                <small id="levelHelper" class="form-text text-muted">Level</small>
                            </div>

                            <div class="mb-3">
                                <label for="armour_class" class="form-label">Armour Class</label>
                                <input type="text" class="form-control" name="armour_class" id="armour_class"
                                    @error('armour_class') is-invalid @enderror aria-describedby="armourClassHelper"
                                    placeholder="Armour Class" value="{{ old('armour_class') }}" />
                                <small id="armourClassHelper" class="form-text text-muted">Armour Class</small>
                            </div>

                            <div class="mb-3">
                                <label for="cd" class="form-label">CD</label>
                                <input type="text" class="form-control" name="cd" id="cd"
                                    @error('cd') is-invalid @enderror aria-describedby="cdHelper" placeholder="CD"
                                    value="{{ old('cd') }}" />
                                <small id="cdHelper" class="form-text text-muted">CD</small>
                            </div>

                            <div class="mb-3">
                                <label for="backstory" class="form-label">Backstory</label>
                                <textarea class="form-control" name="backstory" id="backstory" @error('backstory') is-invalid @enderror
                                    aria-describedby="backstoryHelper" placeholder="Backstory">{{ old('backstory') }}</textarea>
                                <small id="backstoryHelper" class="form-text text-muted">Backstory</small>
                            </div>

                            <button type="submit" class="btn btn-primary">
                                Create
                            </button>

                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
