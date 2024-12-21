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
                                <li class="breadcrumb-item"><a href="#">Networks</a></li>
                                <li class="breadcrumb-item" aria-current="page">User</li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h2 class="mb-0">User Network</h2>
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

                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <!-- Add New -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#createModal">
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

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- [ Main Content ] end -->
    </section>
@endsection
