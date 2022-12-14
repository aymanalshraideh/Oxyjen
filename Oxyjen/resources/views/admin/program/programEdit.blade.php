@extends('admin.layouts.master')

@section('content')
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span>Create Startup Bio</h4>

            <!-- Basic Layout -->
            <div class="row">
                <div class="col-xl">
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Basic Layout</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{route('program-update',$program->id)}}" method="post" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Program</label>
                                    <textarea name="program" id="basic-default-message" required class="form-control" placeholder="Add text here..." >{{$program->program}}</textarea>
                                </div>
                               
                               
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Image 1</label>
                                    <input class="form-control" name="image1" type="file" id="formFile" required />
                                    <img src="{{ url('Image/program/' . $program->image1) }}" alt="startup image"
                                        class="rounded-circle" width="150px" height='100px' />
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Image 2</label>
                                    <input class="form-control" name="image2" type="file" id="formFile" required />
                                    <img src="{{ url('Image/program/' . $program->image2) }}" alt="startup image"
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
