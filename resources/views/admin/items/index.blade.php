@extends('layouts.app')

@section('content')
    <div class="admin-pages-bg">
        <div class="container">
            <div class="row pt-5 admin-text-custom">
                <div class="col">
                    <p class="fw-bolder fs-1">Items</p>
                </div>
                <!-- /.col -->
                <div class="col text-end">
                    <a class="add-button fw-bolder fs-2 text-decoration-none admin-text-custom"
                        href="{{ route('admin.items.create') }}">
                        Add a new item
                    </a>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            @if (session('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    {{ session('message') }}
                </div>
            @endif
            <!-- /.operations alert -->

            <div class="row row-cols-4 row-cols-lg-12 pt-3 pb-5 g-3">
                @foreach ($items as $item)
                    <div class="col">
                        <div class="card">
                            <div class="card-body admin-text-custom fs-5 better-view">
                                <h4 class="card-title">{{ $item->name }}</h4>
                                <p class="card-text">Type: {{ $item->type }}</p>
                                <p class="card-text">Category: {{ $item->category }}</p>
                                <p class="card-text">Weigth: {{ $item->weight }}</p>
                                <p class="card-text">Price {{ $item->cost }}</p>
                                <p class="card-text">Damage dice: {{ $item->damage_dice }}</p>

                                <div class="row pt-3 text-center">
                                    <div class="col">
                                        <a href="{{ route('admin.items.show', $item) }}"
                                            class="card-buttons-custom">View</a>
                                        <a class="card-buttons-custom" href="{{ route('admin.items.edit', $item) }}">
                                            Edit</a>
                                        <!-- Modal trigger button -->
                                        <button type="button" class="card-buttons-custom" data-bs-toggle="modal"
                                            data-bs-target="#modalId-{{ $item->id }}">
                                            Delete
                                        </button>
                                    </div>
                                </div>
                                <!-- /.row -->

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
                                                    Attention deleting: {{ $item->name }}
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">Attention! You are about to delete this
                                                record. The operation is DESTRUCTIVE
                                                ❌❌❌</div>
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
                                <!-- /.modal -->
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                @endforeach
            </div>
            <!-- /.row -->
            {{ $items->links('pagination::bootstrap-5') }}
        </div>
        <!-- /.container -->
    </div>
    <!-- /.admin-pages-bg -->
@endsection
