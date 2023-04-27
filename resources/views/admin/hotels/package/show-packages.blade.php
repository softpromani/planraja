@extends('layouts.admin')

@section('content')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>All Tour Packages</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">All Tour Packages</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">

                        <div>
                            <div style="float:left;">
                                <h5 class="card-title">List of All Packages</h5>
                            </div>

                            <div style="float:right;">
                                <a href="{{ route('add-tour-package') }}">
                                    <button type="submit" class="btn btn-primary">Add Package</button>
                                </a>
                            </div>

                        </div>

                        <div style="clear:both;"></div>

                        <div>
                            @if(session('success'))
                                <div class="alert alert-success">
                                    {{session('success')}}
                                </div>
                            @endif
                        </div>

                        <div>
                            @if(Session::has('error'))
                                <div class="alert alert-danger">
                                    {{ Session::get('error') }}
                                </div>
                            @endif
                        </div>
                        <!-- Default Table -->
                        <div class="table-responsive">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Package Name </th>
                                        <th scope="col">Duration</th>
                                        <th scope="col">Tour Category</th>
                                        <th scope="col">Start City</th>
                                        <th scope="col">End City</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Created At</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php

                                        if($packageArr != null ){
                                            $i = 1;
                                            ?>

                                                @foreach ($packageArr as $package)
                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td>{{ $package->package_name }}</td>
                                                    <td>{{ $package->duration }}</td>
                                                    <td>{{ $package->category_name }}</td>
                                                    <td>{{ $package->startCity }} </td>
                                                    <td>{{ $package->endCity }} </td>
                                                    <td>
                                                        <?php
                                                            if($package->status == '0'){
                                                                ?>
                                                                <span class="badge bg-danger">Inactive</span>
                                                                <?php
                                                            } else {
                                                                ?>
                                                                <span class="badge bg-success">Active</span>
                                                                <?php
                                                            }
                                                        ?>
                                                    </td>
                                                    <td>{{    date('Y-m-d', strtotime($package->created_at)) }}</td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <a href="{{ url('edit-tour-package/') }}/<?php echo $package->id; ?>"> <span class="btn btn-info text-dark h4 m-1">&#9998;</span> </a>
                                                            <a href="{{route('add_eternity',$package->id)}}" class="btn btn-primary"> <i class="fa fa-plus"></i> </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <?php $i++; ?>
                                                @endforeach

                                            <?php
                                        } else {
                                            ?>
                                            <tr>
                                                <td colspan="9" style="text-align:center;">No packages were found!</td>
                                            </tr>
                                            @php
                                        }
                                    @endphp

                                </tbody>
                            </table>
                        </div>
                        <!-- End Default Table Example -->
                    </div>
                </div>
            </div>

        </div>
    </section>
</main><!-- End #main -->
@endsection
