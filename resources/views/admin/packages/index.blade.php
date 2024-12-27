@extends('admin.master')

@section('title', 'Network')
@section('active-catalog', 'active')

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
                                <li class="breadcrumb-item"><a href="#">Catalog</a></li>
                                <li class="breadcrumb-item" aria-current="page">Packages</li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h2 class="mb-0">Packages</h2>
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

                            <!--******************* packages Create ***************-->
                            @livewire('admin.packages.packages-create')
                            <!--***************************************************-->
                            @livewire('admin.packages.packages-data')

                        </div>
                        <!--************ packages Update & Delete  **********-->
                        @livewire('admin.packages.packages-update')
                        @livewire('admin.packages.packages-delete')
                        <!--************************************************-->
                    </div>

                </div>
            </div>
        </div>

    </section>

@endsection
