@extends('admin.layouts.master')

@section('content')
    <div class="content-wrapper">
        <!-- Content -->
        @php
            $count = 0;
        @endphp
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4>

            <!-- Basic Bootstrap Table -->
            <div class="card">
                <h5 class="card-header">Table Basic</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Image</th>
                                <th>Kitchens</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                           
                                <tr>
                                    <td></td>

                                    <td>
                                        <img src='' alt="Avatar"
                                            class="rounded-circle" style="height: 100px; width: 150px;" />
                                    </td>
                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                        <strong></strong>
                                    </td>

                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href=""><i class="bx bx-edit-alt me-1"></i>
                                                    Edit</a>

                                                <form action="" method="POST" class="d-inline">
                                                    @method('DELETE')
                                                    @csrf
                                                    <span class="dropdown-item"><i class="bx bx-trash me-1"></i> <button
                                                            style="border: none; background-color:transparent;margin:0;padding:0;font-weight: 400;
                                                     color: #697a8d;">Delete</button></span>
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
