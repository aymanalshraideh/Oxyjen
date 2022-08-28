@extends('admin.layouts.master')

@section('content')
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">

            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span>Create About Us</h4>

            <!-- Basic Layout -->
            <div class="row">
                <div class="col-xl">
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Basic Layout</h5>
                            <small class="text-muted float-end">Default label</small>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('startup-update', $startup->id) }}" method="post"
                                enctype="multipart/form-data">
                                @method('PUT')
                                @csrf

                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Startup Name</label>
                                    <input class="form-control" name="companyName" type="text" id="formFile"
                                        value="{{ $startup->companyName }}" required />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-message">Startup Description</label>
                                    <textarea name="description" id="basic-default-message" required class="form-control" placeholder="Add text here...">{{ $startup->description }}</textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Image</label>
                                    <input class="form-control" name="partenership" type="file" id="formFile"
                                        value="{{ $startup->image }}" required />
                                    <img src="{{ url('Image/startup/' . $startup->image) }}" alt="startup image"
                                        class="rounded-circle" width="150px" height='100px' />
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
