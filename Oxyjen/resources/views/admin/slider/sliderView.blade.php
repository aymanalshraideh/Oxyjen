@extends('admin.layouts.master')

@section('content')
    <div class="content-wrapper">
        <!-- Content -->
        @php
            $count = 1;
        @endphp
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Table /</span> Slider Table</h4>
            @if (session('status'))
                <h5 class="alert alert-success">{{ session('status') }}</h5>
            @endif
            <!-- Basic Bootstrap Table -->
            <div class="card">
                <h5 class="card-header">Table Basic</h5>

                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Cover #1</th>
                                <th>Cover #2</th>
                                <th>Title #1</th>
                                <th>Title #2</th>
                                <th>Description #1</th>
                                <th>Description #2</th>
                                <th>Link #1</th>
                                <th>Link #2</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($slider as $item)
                                <tr>
                                    <td>{{ $count++ }}</td>

                                    <td>
                                        <img src="{{ url('/Image/slider/' . $item->coverImage1) }}" alt="cover1"
                                            class="rounded-circle" width="150px" height='100px' />
                                    </td>
                                    <td>
                                        <img src="{{ url('/Image/slider/' . $item->coverImage2) }}" alt="cover2"
                                            class="rounded-circle" width="150px" height='100px' />

                                    </td>
                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                        <strong>{{ $item->title1 }}</strong>
                                    </td>
                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                        <strong>{{ $item->title1 }}</strong>
                                    </td>
                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                        <textarea name="program" id="basic-default-message" required class="form-control" placeholder="Add text here...">   {{ $item->description1 }}</textarea>

                                    </td>
                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                        <textarea name="program" id="basic-default-message" required class="form-control" placeholder="Add text here...">   {{ $item->description2 }}</textarea>
                                    </td>
                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                        {{ $item->link1 }}
                                    </td>
                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                        {{ $item->link2 }}
                                    </td>


                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{ route('slider-edit', $item->id) }}"><i
                                                        class="bx bx-edit-alt me-1"></i>
                                                    Edit</a>

                                                <form action={{ route('slider-delete', $item->id) }} method="POST"
                                                    class="d-inline">
                                                    @method('DELETE')
                                                    @csrf
                                                    <span class="dropdown-item"><i class="bx bx-trash me-1"></i>
                                                        <button
                                                            style="border: none;
                                                             background-color:transparent;margin:0;padding:0;font-weight: 400; 
                                                            color: #697a8d;
                                                            ">
                                                            Delete</button></span>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach



                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <!-- / Content -->

        <!-- Footer -->
    @endsection
