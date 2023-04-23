@extends('layouts.admin')

@section('content')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>All Hotels</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">All Amenities</li>
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
                                <h5 class="card-title">List of All Amenities</h5>
                            </div>
                            <div style="float:right;" class="card-title">
                                <a href="{{ url('add-amenities')  }}">
                                    <button type="button" class="btn btn-primary">Add Amenities</button>
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
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Created At</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    if(count($amenitiesArr) > 0){
                                        $i = 1;
                                        ?>

                                            @foreach ($amenitiesArr as $amenity)
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td>{{ $amenity['title'] }}</td>
                                                <td>{{ $amenity['category'] }}</td>
                                                <td>{{    date('Y-m-d', strtotime($amenity['created_at'])) }}</td>
                                                <td>
                                                    <a href="{{ url('edit-amenities/') }}/<?php echo $amenity['id']; ?>"> Edit </a>
                                                    {{-- |  <a href="#"> Delete </a> --}}


                                                </td>
                                            </tr>
                                            <?php $i++; ?>
                                            @endforeach

                                        <?php
                                    } else {
                                        ?>
                                        <tr>
                                            <td colspan="5">No data found!</td>
                                        </tr>
                                        @php
                                    }
                                @endphp

                            </tbody>
                        </table>
                        <!-- End Default Table Example -->
                    </div>
                </div>
            </div>

        </div>
    </section>
</main><!-- End #main -->
@endsection
