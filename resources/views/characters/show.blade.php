@extends('layout.app')

@section('main-content')
    <div class="container py-4">
        <div class="btn btn-secondary  ">
            <a class="text-decoration-none text-white" href="{{ route('characters.index') }}">◀️ Return Characters</a>
        </div>
        <div class="row row-cols-4 row-cols-lg-6 py-3 g-4">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">{{ $character->name }}</h4>
                        <p class="card-text">Description: {{ $character->description }}</p>
                        <p class="card-text">Attack: {{ $character->attack }}</p>
                        <p class="card-text">Defense: {{ $character->defense }}</p>
                        <p class="card-text">Speed: {{ $character->speed }}</p>

                        <a class="btm btn-dark" href="{{ route('characters.edit', $character) }}"> Edit</a>

                        <!-- Modal trigger button -->
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                            data-bs-target="#modalId-{{ $character->id }}">
                            Delete
                        </button>

                        <!-- Modal Body -->
                        <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                        <div class="modal fade" id="modalId-{{ $character->id }}" tabindex="-1" data-bs-backdrop="static"
                            data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
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

        </div>
        {{-- /.row --}}
    </div>
    {{-- /.container --}}
@endsection
