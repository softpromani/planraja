@extends('layouts.admin')

@section('content')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>All Hotels</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">All Hotels</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">List of All Hotels</h5>

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
                                    <th scope="col">Hotel Name </th>
                                    <th scope="col">Phone No</th>
                                    <th scope="col">Email Id</th>
                                    <th scope="col">Property Type</th>
                                    <th scope="col">Is Verified</th>
                                    <th scope="col">Created At</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    if(count($hotelArr) > 0){
                                        $i = 1;
                                        ?>

                                            @foreach ($hotelArr as $hotel)
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td>{{ $hotel['hotel_name'] }}</td>
                                                <td>{{ $hotel['hotel_phone_no'] }}</td>
                                                <td>{{ $hotel['hotel_email_id'] }}</td>
                                                <td>
                                                    <?php
                                                        if($hotel['property_type'] == 0){
                                                            echo 'Hotel';
                                                        } else {
                                                            echo 'Resort';
                                                        }
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php
                                                        if($hotel['is_verify'] == '0'){
                                                            ?>
                                                            <span class="badge bg-danger">Not verified</span>
                                                            <?php
                                                        } else {
                                                            ?>
                                                            <span class="badge bg-success">verified</span>
                                                            <?php
                                                        }
                                                    ?>
                                                </td>
                                                <td>{{    date('Y-m-d', strtotime($hotel['created_at'])) }}</td>
                                                <td>
                                                    <a href="{{ url('edit-hotels/') }}/<?php echo $hotel['id']; ?>"> Edit </a>
                                                    {{-- |  <a href="#"> Delete </a> --}}


                                                </td>
                                            </tr>
                                            <?php $i++; ?>
                                            @endforeach

                                        <?php
                                    } else {
                                        ?>
                                        <tr>
                                            <td colspan="8">No hotels were found!</td>
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
