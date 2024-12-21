@extends('admin.master')

@section('title', 'Network')
@section('active-network', 'active')


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
                            <form class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Email address</label>
                                    <input type="email" class="form-control" placeholder="Enter email">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control" placeholder="Enter name">
                                </div>
                                <!-- SUBMIT -->
                                <div class="col-md-12 mb-4">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- [ Main Content ] end -->
    </section>
@endsection
