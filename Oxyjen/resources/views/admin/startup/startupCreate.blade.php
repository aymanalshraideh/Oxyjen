@extends('admin.layouts.master')

@section('content')
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span>Create Startup </h4>

            <!-- Basic Layout -->
            <div class="row">
                <div class="col-xl">
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Basic Layout</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{route('startup-store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                
                                <div class="mb-3">
                                    <label for="formFile" class="form-label"> company Name</label>
                                    <input class="form-control" name="companyName" type="text" id="formFile" required />
                                </div>
                               
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-message">Description</label>
                                    <textarea name="description" id="basic-default-message" required class="form-control" placeholder="Add text here..." ></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Image</label>
                                    <input class="form-control" name="image" type="file" id="formFile" required />
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
