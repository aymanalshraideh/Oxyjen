@extends('admin.layouts.master')

@section('content')
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span>Update Slider</h4>

            <!-- Basic Layout -->
            <div class="row">
                <div class="col-xl">
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Basic Layout</h5>
                            <small class="text-muted float-end">Default label</small>
                        </div>
                        <div class="card-body">
                            <form action="{{route('slider-update',$slider->id)}}" method="post" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-fullname" required>Cover Title 1</label>
                                    <input type="text" name="title1" class="form-control" id="basic-default-fullname" required value="{{$slider->title1}}" />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-fullname" required>Cover Title 2</label>
                                    <input type="text" name="title2" class="form-control" id="basic-default-fullname" value="{{$slider->title2}}" required />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-fullname" required>Cover Link 1</label>
                                    <input type="text" name="link1" class="form-control" id="basic-default-fullname" value="{{$slider->link1}}" required />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-fullname" required>Cover Link 2</label>
                                    <input type="text" name="link2" class="form-control" id="basic-default-fullname" value="{{$slider->link2}}" required/>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-message">Description1</label>
                                    <textarea name="description1" id="basic-default-message" required class="form-control" placeholder="Add text here..." >{{$slider->description1}}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-message">Description2</label>
                                    <textarea name="description2" id="basic-default-message" required class="form-control" placeholder="Add text here..." >{{$slider->description2}}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Cover Image1</label>
                                    <input class="form-control" name="coverImage1" type="file" id="formFile" required />
                                    <img src="{{asset('/Image/slider/'.$slider->coverImage1)}}" alt="coverImage1" width="100" height="100">
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Cover Image2</label>
                                    <input class="form-control" name="coverImage2" type="file" id="formFile" required />
                                    <img src="{{asset('/Image/slider/'.$slider->coverImage2)}}" alt="coverImage2" width="100" height="100">

                                </div>

                                <button type="submit" class="btn btn-primary">update</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- / Content -->
    @endsection
