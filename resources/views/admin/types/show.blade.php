@extends('layouts.app')

@section('content')
    <div class="admin-pages-bg">
        <div class="container">
            <div class="row py-5">
                <div>
                    <a class="back-button fw-bolder fs-2 text-decoration-none admin-text-custom pb-2"
                        href="{{ route('admin.types.index') }}">
                        <i class="fa-solid fa-angles-left"></i>
                        Return to Types</a>
                </div>
                <!--/back-button -->
                <div class="col py-3">
                    <div class="card">
                        <div class="card-body admin-text-custom fs-5 better-view">
                            <h4 class="card-title">{{ $type->name }}</h4>
                            <p class="card-text">Type: {{ $type->desc }}</p>
                            <div class="row pt-3 text-center">
                                <div class="col">
                                    <a class="card-buttons-custom" href="{{-- {{ route('admin.types.edit', $item) }} --}}">
                                        Edit</a>
                                    <!-- Modal trigger button -->
                                    <button type="button" class="card-buttons-custom" data-bs-toggle="modal"
                                        data-bs-target="#modalId-{{ $type->id }}">
                                        Delete
                                    </button>
                                </div>
                            </div>
                            <!-- /.row -->

                            <!-- Modal Body -->
                            <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                            <div class="modal fade" id="modalId-{{ $type->id }}" tabindex="-1"
                                data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
                                aria-labelledby="modalTitleId" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                                    role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalTitleId-{{ $type->id }}">
                                                Attention deleting: {{ $type->name }}
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
                                            <form action="{{-- {{ route('admin.types.destroy', $type) }} --}}" method="post">
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
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
                <!--/.col -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.admin-pages-bg -->
@endsection
