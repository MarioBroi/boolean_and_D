@extends('layout.app')

@section('main-content')
    <div class="container">
        <div class="d-flex align-items-center py-3">
            <h2 class="px-4">Characters</h2>
            <a class="btn btn-primary" href="{{ route('characters.create') }}">Add</a>
        </div>
        <div class="row row-cols-4 row-cols-lg-6 py-3 g-4">
            @forelse ($characters as $character)
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">{{ $character->name }}</h4>
                            <p class="card-text">{{ $character->description }}</p>
                            <a href="{{ route('characters.show', $character) }}">Views</a>
                            <a class="btm btn-dark" href="{{ route('characters.edit', $character) }}"> Edit</a>


                            <!-- Modal trigger button -->
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#modalId-{{ $character->id }}">
                                Delete
                            </button>

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
                                            <form action="{{ route('characters.destroy', $character) }}" method="post">
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
@endsection
