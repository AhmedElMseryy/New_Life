@extends('admin.master')

@section('title', 'Network')
@section('active-ranks', 'active')

@section('content')

    <section class="pc-container">
        <div class="pc-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#">Ranks</a></li>
                                <li class="breadcrumb-item" aria-current="page">List</li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h2 class="mb-0">Ranks List</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->

            <!-- [ Main Content ] start -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">

<<<<<<< HEAD
                            <!--******************* ranks Create *******************-->
                            @livewire('admin.ranks.ranks-create')
                            <!--***************************************************-->
                            @livewire('admin.ranks.ranks-data')
=======
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <!-- Add New -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#login-modal">
                                    Add New
                                </button>

                                <!-- SEARCH -->
                                <input type="text" class="form-control w-auto" placeholder="Search..."
                                    wire:model.live="search">
                            </div>

                            <div class="table-responsive dt-responsive">
                                <table id="c-tool-ele" class="table table-striped table-bordered nowrap">
                                    <thead>
                                        <tr>
                                            <th>First name</th>
                                            <th>Last name</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>DOB</th>
                                            <th>Salary</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Quinn Flynn</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                            <!-- ACTIONS -->
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                        data-bs-toggle="dropdown">
                                                        actions
                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <!-- Edit -->
                                                        <a class="dropdown-item" href="#"
                                                            wire:click.prevent="$dispatch('skillUpdate',{ id: {{ 1 }} })">
                                                            <i class="bx bx-edit-alt me-1"></i>
                                                            Edit
                                                        </a>

                                                        <!-- Delete -->
                                                        <a class="dropdown-item" href="#"
                                                            wire:click.prevent="$dispatch('skillDelete',{ id: {{ 1 }} })">
                                                            <i class="bx bx-trash me-1"></i>
                                                            Delete
                                                        </a>

                                                        <!-- Show -->
                                                        <a class="dropdown-item" href="#"
                                                            wire:click.prevent="$dispatch('skillShow',{ id: {{ 1 }} })">
                                                            <i class="bx bx-show-alt me-1"></i>
                                                            Show
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
>>>>>>> 1a90e3d4e79806835b23e033bf886bfbf8f3e729

                        </div>
                        <!--************ Ranks Update & Delete  ************-->
                        @livewire('admin.ranks.ranks-update')
                        @livewire('admin.ranks.ranks-delete')
                        <!--************************************************-->
                    </div>

                </div>
            </div>
        </div>
        <!-- [ Main Content ] end -->
    </section>


<<<<<<< HEAD
=======
    <!-------------------------------------------------------------- Modal ------------------>

    <div class="modal fade login-modal" id="login-modal" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content card mb-0 user-card">
                <div class="modal-body">
                    <div class="d-flex mb-4">
                        <div class="flex-grow-1 me-3">
                            <h4 class="f-w-500 mb-1">Login with your email</h4>
                            <p class="mb-3">Don't have an Account?<a href="#" class="link-primary ms-2"
                                    data-bs-toggle="modal" data-bs-target="#registration-modal">Create Account</a></p>
                        </div>
                        <div class="flex-shrink-0">
                            <a href="#" class="avtar avtar-s btn-link-danger btn-pc-default" data-bs-dismiss="modal">
                                <i class="ti ti-x f-20"></i>
                            </a>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input type="email" class="form-control" placeholder="Email Address">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="d-flex mt-1 justify-content-between align-items-center">
                        <div class="form-check">
                            <input class="form-check-input input-primary" type="checkbox" id="customCheckc1" checked="">
                            <label class="form-check-label text-muted" for="customCheckc1">Remember me?</label>
                        </div>
                    </div>
                    <div class="d-grid mt-4">
                        <button type="button" class="btn btn-primary">Login</button>
                    </div>
                    <div class="saprator my-3">
                        <span>Or continue with</span>
                    </div>
                    <div class="text-center">
                        <ul class="list-inline mx-auto mt-3 mb-0">
                            <li class="list-inline-item">
                                <a href="https://www.facebook.com/" class="avtar avtar-s rounded-circle bg-facebook"
                                    target="_blank">
                                    <i class="fab fa-facebook-f text-white"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://twitter.com/" class="avtar avtar-s rounded-circle bg-twitter"
                                    target="_blank">
                                    <i class="fab fa-twitter text-white"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://myaccount.google.com/" class="avtar avtar-s rounded-circle bg-googleplus"
                                    target="_blank">
                                    <i class="fab fa-google text-white"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade login-modal" id="registration-modal" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content card mb-0 user-card">
                <div class="modal-body">
                    <div class="d-flex mb-4">
                        <div class="flex-grow-1 me-3">
                            <h4 class="f-w-500 mb-1">Register with your email</h4>
                            <p class="mb-3">Already have an Account? <a href="#" class="link-primary"
                                    data-bs-toggle="modal" data-bs-target="#login-modal">Log in</a></p>
                        </div>
                        <div class="flex-shrink-0">
                            <a href="#" class="avtar avtar-s btn-link-danger btn-pc-default"
                                data-bs-dismiss="modal">
                                <i class="ti ti-x f-20"></i>
                            </a>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" placeholder="Enter Name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input type="email" class="form-control" placeholder="Enter Email Address">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" placeholder="Enter Password">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" placeholder="Enter Confirm Password">
                    </div>
                    <div class="d-flex mt-1 justify-content-between align-items-center">
                        <div class="form-check">
                            <input class="form-check-input input-primary" type="checkbox" id="customCheckc1"
                                checked="">
                            <label class="form-check-label text-muted" for="customCheckc1">I agree to all the Terms &
                                Condition</label>
                        </div>
                    </div>
                    <div class="d-grid mt-4">
                        <button type="button" class="btn btn-primary">Login</button>
                    </div>
                    <div class="saprator my-3">
                        <span>Or continue with</span>
                    </div>
                    <div class="text-center">
                        <ul class="list-inline mx-auto mt-3 mb-0">
                            <li class="list-inline-item">
                                <a href="https://www.facebook.com/" class="avtar avtar-s rounded-circle bg-facebook"
                                    target="_blank">
                                    <i class="fab fa-facebook-f text-white"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://twitter.com/" class="avtar avtar-s rounded-circle bg-twitter"
                                    target="_blank">
                                    <i class="fab fa-twitter text-white"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://myaccount.google.com/" class="avtar avtar-s rounded-circle bg-googleplus"
                                    target="_blank">
                                    <i class="fab fa-google text-white"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- --------- End Modal---------------> --}}


>>>>>>> 1a90e3d4e79806835b23e033bf886bfbf8f3e729

@endsection
