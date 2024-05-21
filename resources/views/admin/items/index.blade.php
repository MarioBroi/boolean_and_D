@extends('layouts.app')

@section('content')
    <div class="container">
        <a class="btn btn-primary mt-5" href="{{ route('admin.items.create') }}">Add new item</a>
        <div class="row">
            @foreach ($items as $item)
                <div class="col-3 g-3">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">{{ $item->name }}</h4>
                            <p class="card-text">Type: {{ $item->type }}</p>
                            <p class="card-text">Category: {{ $item->category }}</p>
                            <p class="card-text">Weigth: {{ $item->weight }}</p>
                            <p class="card-text">Price {{ $item->cost }}</p>
                            <p class="card-text">Damage dice: {{ $item->damage_dice }}</p>
                            <p class="card-text">
                                <a href="{{ route('admin.items.show', $item) }}">Show</a>
                            </p>
                            <p class="card-text">
                                <a href="{{ route('admin.items.edit', $item) }}">Edit</a>
                            </p>

                            <button type="button" class="btn btn-danger btn-lg" data-bs-toggle="modal"
                                data-bs-target="#modalId-{{ $item->id }}">
                                Delete
                            </button>

                            <!-- Modal Body -->
                            <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                            <div class="modal fade" id="modalId-{{ $item->id }}" tabindex="-1"
                                data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
                                aria-labelledby="modalTitleId" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                                    role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalTitleId-{{ $item->id }}">
                                                Attention deleting: {{ $item->title }}
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">Sei sicuro di voler procedere all'eliminazione?</div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                Close
                                            </button>
                                            <form action="{{ route('admin.items.destroy', $item) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger">
                                                    Delete
                                                </button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
