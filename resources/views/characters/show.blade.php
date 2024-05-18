@extends('layout.app')

@section('main-content')
    <div class="characters">
        <div class="container py-4">
            <a class="characters-buttons" href="{{ route('character.index') }}"><i class="fa-solid fa-angles-left"></i> Return
                Characters</a>
            <div class="row py-3 g-4">
                <div class="col better-view">
                    <h2>{{ $character->full_name }}</h2>
                    <p class="character-text">Race: {{ $character->race }}</p>
                    <p class="character-text">Level: {{ $character->level }}</p>
                    <p class="character-text">Age: {{ $character->age }}</p>
                    <p class="character-text">Alignment: {{ $character->alignment }}</p>
                    <p class="character-text">Health points: {{ $character->health_points }}</p>
                    <p class="character-text">Class: {{ $character->class }}</p>
                    <p class="character-text">Sub class: {{ $character->sub_class }}</p>
                    <p class="character-text">Armour class: {{ $character->armour_class }}</p>
                    <p class="character-text">CD: {{ $character->cd }}</p>
                    <p class="character-text">Back story: {{ $character->backstory }}</p>

                    <div class="characters-card-bottom" role="group">
                        <a href="{{ route('character.edit', $character) }}" class="characters-buttons">Edit</a>
                        <button type="button" class="characters-delete" data-bs-toggle="modal"
                            data-bs-target="#deleteModal-{{ $character->id }}">
                            Delete
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.characters -->

    <!-- Delete Modal -->
    <div class="modal fade" id="deleteModal-{{ $character->id }}" tabindex="-1" aria-labelledby="deleteModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Delete Character</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete {{ $character->full_name }}?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <form action="{{ route('character.destroy', $character) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
