@extends('admin.layouts.master')

@section('content')
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">

            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span>Edit Team Members</h4>
            @if (session('status'))
                <h5 class="alert alert-success">{{ session('status') }}</h5>
            @endif
            <!-- Basic Layout -->
            <div class="row">
                <div class="col-xl">
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Basic Layout</h5>
                            <small class="text-muted float-end">Default label</small>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('team-update', $team->id) }}" method="post" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf



                                <div class="mb-3">
                                    <label for="formFile" class="form-label"> Member Name</label>
                                    <input class="form-control" name="name" type="text" id="formFile" required />
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label"> Image</label>
                                    <input class="form-control" name="image" type="file" id="formFile" required />
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Linked-in link</label>
                                    <input class="form-control" name="linkedin" type="text" id="formFile" required />
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Twitter link</label>
                                    <input class="form-control" name="twitter" type="text" id="formFile" required />
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Facebook link</label>
                                    <input class="form-control" name="facebook" type="text" id="formFile" required />
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Email</label>
                                    <input class="form-control" name="email" type="text" id="formFile" required />
                                </div>



                                <button type="submit" class="btn btn-primary">Send</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- / Content -->
    @endsection
