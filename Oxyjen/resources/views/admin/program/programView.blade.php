@extends('admin.layouts.master')

@section('content')
    <div class="content-wrapper">
        <!-- Content -->
        @php
            $count = 1;
        @endphp
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Table /</span> About US Table</h4>
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

                                <th>Program</th>
                                <th>Image 1</th>
                                <th>Image 2</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($program as $item)
                                <tr>
                                    <th>{{ $count++ }}</th>

                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                        <textarea name="description1" id="basic-default-message" required class="form-control" placeholder="Add text here...">{{ $item->program }}</textarea>
                                        
                                    </td>

                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                        <img src="{{ url('Image/program/' . $item->image1) }}" alt="startup image"
                                            class="rounded-circle" width="150px" height='100px' />

                                    </td>
                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                        <img src="{{ url('Image/program/' . $item->image2) }}" alt="startup image"
                                            class="rounded-circle" width="150px" height='100px' />

                                    </td>

                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{ route('program-edit', $item->id) }}"><i
                                                        class="bx bx-edit-alt me-1"></i>
                                                    Edit</a>

                                                <form action={{ route('program-delete', $item->id) }} method="POST"
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
