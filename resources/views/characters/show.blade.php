@extends('layout.app')

@section('main-content')
    <div class="container py-4">
        <div class="row py-3 g-4">
            <div class="col">
                <h2>{{ $character->full_name }}</h2>
                <p><strong>Age:</strong> {{ $character->age }}</p>
                <p><strong>Race:</strong> {{ $character->race }}</p>
                <p><strong>Class:</strong> {{ $character->class }}</p>
                <p><strong>Level:</strong> {{ $character->level }}</p>
                <p><strong>Description:</strong> {{ $character->backstory }}</p>
                <div class="btn-group" role="group">
                    <a href="{{ route('character.edit', $character) }}" class="btn btn-dark">Edit</a>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                        data-bs-target="#deleteModal-{{ $character->id }}">
                        Delete
                    </button>
                </div>
            </div>
        </div>
    </div>

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
