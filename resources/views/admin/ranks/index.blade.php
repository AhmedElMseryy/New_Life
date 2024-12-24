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

                            <!--******************* ranks Create *******************-->
                            @livewire('admin.ranks.ranks-create')
                            <!--***************************************************-->
                            @livewire('admin.ranks.ranks-data')

                        </div>
                        <!--************ Ranks Update & Delete  ************-->
                        @livewire('admin.ranks.ranks-update')
                        @livewire('admin.ranks.ranks-delete')
                        <!--************************************************-->
                    </div>

                </div>
            </div>
        </div>

    </section>

@endsection
