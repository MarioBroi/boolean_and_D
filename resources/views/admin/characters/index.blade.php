@extends('layouts.app')

@section('content')
    <div class="characters">
        <div class="welcome-container">
            <div class="characters-title">
                <h1 class="">Characters</h1>
                <a class="add-button" href="{{ route('admin.characters.create') }}">Add new character</a>
            </div>
            <div class="row row-cols-4 row-cols-lg-12 py-3 g-3">
                @forelse ($characters as $character)
                    <div class="col">
                        <div class="card better-view">
                            <div class="card-body">
                                <h4 class="card-title character-title">{{ $character->full_name }}</h4>
                                <p class="card-text character-text">Race: {{ $character->race }}</p>
                                <p class="card-text character-text">Level: {{ $character->level }}</p>
                                <p class="card-text character-text">Age: {{ $character->age }}</p>
                                <p class="card-text character-text">Alignment: {{ $character->alignment }}</p>
                                <p class="card-text character-text">Health points: {{ $character->health_points }}</p>
                                <p class="card-text character-text">Class: {{ $character->class }}</p>
                                <p class="card-text character-text">Sub class: {{ $character->sub_class }}</p>
                                <p class="card-text character-text">Armour class: {{ $character->armour_class }}</p>
                                <p class="card-text character-text">CD: {{ $character->cd }}</p>
                                <p class="card-text character-text">Back story: {{ $character->backstory }}</p>

                                <div class="characters-card-bottom">
                                    <div>
                                        <a href="{{ route('admin.characters.show', $character) }}"
                                            class="characters-buttons">Views</a>
                                        <a class="characters-buttons"
                                            href="{{ route('admin.characters.edit', $character) }}">
                                            Edit</a>
                                    </div>
                                    <!-- Modal trigger button -->
                                    <button type="button" class="characters-delete" data-bs-toggle="modal"
                                        data-bs-target="#modalId-{{ $character->id }}">
                                        Delete
                                    </button>
                                </div>



                                <!-- Modal Body -->
                                <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                                <div class="modal fade" id="modalId-{{ $character->id }}" tabindex="-1"
                                    data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
                                    aria-labelledby="modalTitleId" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                                        role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalTitleId-{{ $character->id }}">
                                                    Attention! Deleting: {{ $character->name }}
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">Attention! You are about to delete this record. The
                                                operation is DESTRUCTIVE
                                                ❌❌❌</div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                                <form action="{{ route('admin.characters.destroy', $character) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-danger">
                                                        Delete
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- /.card --}}
                    </div>
                    {{-- /.col --}}
                @empty
                    <div class="col">
                        <div class="card">
                            <h4 class="card-title">Sorry, nothing to display</h4>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                @endforelse
            </div>
            {{-- /.row --}}
        </div>
        {{-- /.container --}}
    </div>
    <!-- /.characters -->
@endsection
