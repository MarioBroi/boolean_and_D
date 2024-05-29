@extends('layouts.app')

@section('content')
    @include('partials.validation-errors')
    <div class="admin-pages-bg">

        <div class="container py-5">

            <h1 class="admin-text-custom fw-bolder">New Character</h1>

            <div class="row row-cols-4">

                <div class="col">
                    <form action="{{ route('admin.characters.store') }}" method="post" class="card-create better-view">
                        @csrf

                        <div class="mb-3">
                            <label for="full_name" class="form-label character-text fw-bold">Full Name</label>
                            <input type="text" class="form-control character-text" name="full_name" id="full_name"
                                @error('full_name') is-invalid @enderror aria-describedby="fullNameHelper"
                                placeholder="Full Name" value="{{ old('full_name') }}" required />
                            <small id="fullNameHelper" class="form-text text-muted">Type a full name for the
                                character</small>
                            @error('full_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <!-- /.name -->

                        <div class="mb-3">
                            <label for="race" class="form-label character-text fw-bold">Race</label>
                            <input type="text" class="form-control character-text" name="race" id="race"
                                @error('race') is-invalid @enderror aria-describedby="raceHelper" placeholder="Race"
                                value="{{ old('race') }}" />
                            <small id="raceHelper" class="form-text text-muted">Type a race for the character</small>
                            @error('race')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <!-- /.race -->

                        <div class="mb-3">
                            <label for="type_id" class="form-label fw-bold">Type</label>
                            <select class="form-select form-select-lg" name="type_id" id="type_id">
                                <option selected>Select one</option>
                                @forelse ($types as $type)
                                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                                @empty
                                    <p>Nothing Here!!</p>
                                @endforelse
                            </select>
                            @error('type')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <!-- /.type -->

                </div>
                <!-- /.col -->
                </form>

                <div class="col">

                    <form action="{{ route('admin.characters.store') }}" method="post" class="card-create better-view">
                        @csrf

                        <div class="mb-3">
                            <label for="sex" class="form-label character-text fw-bold">Sex</label>
                            <input type="text" class="form-control character-text" name="sex" id="sex"
                                @error('sex') is-invalid @enderror aria-describedby="sexHelper" placeholder="Sex"
                                value="{{ old('sex') }}" />
                            <small id="sexHelper" class="form-text text-muted">Type a sex for the character</small>
                        </div>
                        <!-- /.sex -->

                        <div class="mb-3">
                            <label for="age" class="form-label character-text fw-bold">Age</label>
                            <input type="text" class="form-control character-text" name="age" id="age"
                                @error('age') is-invalid @enderror aria-describedby="ageHelper" placeholder="Age"
                                value="{{ old('age') }}" />
                            <small id="ageHelper" class="form-text text-muted">Type a age for the character</small>
                        </div>
                        <!-- /.age -->

                        <div class="mb-3">
                            <label for="alignment" class="form-label character-text fw-bold">Alignment</label>
                            <input type="text" class="form-control character-text" name="alignment" id="alignment"
                                @error('alignment') is-invalid @enderror aria-describedby="alignmentHelper"
                                placeholder="Alignment" value="{{ old('alignment') }}" />
                            <small id="alignmentHelper" class="form-text text-muted">Type a alignment for the
                                character</small>
                        </div>
                        <!-- /.alignment -->

                    </form>
                    <!-- /form -->

                </div>
                <!-- /.col -->

                <div class="col">

                    <form action="{{ route('admin.characters.store') }}" method="post" class="card-create better-view">
                        @csrf

                        <div class="mb-3">
                            <label for="health_points" class="form-label character-text fw-bold">Health Points</label>
                            <input type="text" class="form-control character-text" name="health_points"
                                id="health_points" @error('health_points') is-invalid @enderror
                                aria-describedby="healthPointsHelper" placeholder="Health Points"
                                value="{{ old('health_points') }}" />
                            <small id="healthPointsHelper" class="form-text text-muted">Type the healt points for the
                                character</small>
                        </div>
                        <!-- /.healt points -->

                        <div class="mb-3">
                            <label for="class" class="form-label character-text fw-bold">Class</label>
                            <input type="text" class="form-control character-text" name="class" id="class"
                                @error('class') is-invalid @enderror aria-describedby="classHelper" placeholder="Class"
                                value="{{ old('class') }}" />
                            <small id="classHelper" class="form-text text-muted">Type a class for the character</small>
                            @error('class')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <!-- /.class -->

                        <div class="mb-3">
                            <label for="sub_class" class="form-label character-text fw-bold">Sub-Class</label>
                            <input type="text" class="form-control character-text" name="sub_class" id="sub_class"
                                @error('sub_class') is-invalid @enderror aria-describedby="subClassHelper"
                                placeholder="Sub-Class" value="{{ old('sub_class') }}" />
                            <small id="subClassHelper" class="form-text text-muted">Type a sub class for the
                                character</small>
                        </div>
                        <!-- /.sub-class -->

                    </form>
                    <!-- /form -->

                </div>
                <!-- /.col -->

                <div class="col">

                    <form action="{{ route('admin.characters.store') }}" method="post" class="card-create better-view">
                        @csrf

                        <div class="mb-3">
                            <label for="level" class="form-label character-text fw-bold">Level</label>
                            <input type="text" class="form-control character-text" name="level" id="level"
                                @error('level') is-invalid @enderror aria-describedby="levelHelper" placeholder="Level"
                                value="{{ old('level') }}" />
                            <small id="levelHelper" class="form-text text-muted">Type a level for the character</small>
                        </div>
                        <!-- /.level -->

                        <div class="mb-3">
                            <label for="armour_class" class="form-label character-text fw-bold">Armour Class</label>
                            <input type="text" class="form-control character-text" name="armour_class"
                                id="armour_class" @error('armour_class') is-invalid @enderror
                                aria-describedby="armourClassHelper" placeholder="Armour Class"
                                value="{{ old('armour_class') }}" />
                            <small id="armourClassHelper" class="form-text text-muted">Type a armour class for the
                                character</small>
                        </div>
                        <!-- /.armour-class -->

                        <div class="mb-3">
                            <label for="cd" class="form-label character-text fw-bold">CD</label>
                            <input type="text" class="form-control character-text" name="cd" id="cd"
                                @error('cd') is-invalid @enderror aria-describedby="cdHelper" placeholder="CD"
                                value="{{ old('cd') }}" />
                            <small id="cdHelper" class="form-text text-muted">Type a CD for the character</small>
                        </div>
                        <!-- /.CD -->

                    </form>

                </div>
                <!-- /.col -->

            </div>
            <!-- /.row -->

            <div class="row my-3">

                <div class="col">

                    <form action="{{ route('admin.characters.store') }}" method="post" class="card-create better-view">
                        @csrf

                        <div class="mb-3">
                            <label for="backstory" class="form-label character-text fw-bold">Backstory</label>
                            <textarea class="form-control character-text" name="backstory" id="backstory"
                                @error('backstory') is-invalid @enderror aria-describedby="backstoryHelper" placeholder="Backstory">{{ old('backstory') }}</textarea>
                            <small id="backstoryHelper" class="form-text text-muted">Type a backstory for the
                                character</small>
                        </div>
                        <!-- /.backstory -->

                    </form>
                    <!-- /form -->

                </div>
                <!-- /.col -->

            </div>
            <!-- /.row -->

            <form action="{{ route('admin.characters.store') }}" method="post" class="card-create text-center">
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
