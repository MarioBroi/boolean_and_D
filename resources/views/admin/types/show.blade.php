@extends('layouts.app')

@section('content')
    <div class="admin-pages-bg">
        <div class="container">
            <div class="row pt-5 pb-3">
                <div>
                    <a class="back-button fw-bolder fs-2 text-decoration-none admin-text-custom pb-2"
                        href="{{ route('admin.types.index') }}">
                        <i class="fa-solid fa-angles-left"></i>
                        Return to Types</a>
                </div>
                <!--/back-button -->

                <div class="col pt-3">
                    <div class="card">
                        <div class="card-body admin-text-custom fs-5 better-view">
                            <h4 class="card-title">{{ $type->name }}</h4>
                            <p class="card-text">Type: {{ $type->desc }}</p>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <div class="text-center pb-5">
                <a class="card-buttons-custom px-5 py-3 fw-bold" href="{{ route('admin.types.edit', $type) }}">
                    Edit</a>
                <!-- Modal trigger button -->
                <button type="button" class="card-buttons-custom px-5 py-3 fw-bold" data-bs-toggle="modal"
                    data-bs-target="#modalId-{{ $type->id }}">
                    Delete
                </button>
            </div>
            <!-- /.buttons -->

            <!-- Modal Body -->
            <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
            <div class="modal fade" id="modalId-{{ $type->id }}" tabindex="-1" data-bs-backdrop="static"
                data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalTitleId-{{ $type->id }}">
                                Attention deleting: {{ $type->name }}
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.modal -->

        </div>
        <!-- /.container -->
    </div>
    <!-- /.admin-pages-bg -->
@endsection
