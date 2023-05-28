@extends('layouts.admin')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Enquiry</a></li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">

                        <!-- Recent Sales -->
                        <div class="col-12">
                            <div class="card recent-sales overflow-auto">

                                <div class="card-body m-3 table-responsive">
                                    <table class="table">
                                        <thead class="thead-dark">
                                          <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Departure Date</th>
                                            <th scope="col">Members</th>
                                            <th scope="col">Number</th>
                                            <th scope="col">Days</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Action</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $dt)
                                          <tr>
                                            <th scope="row">{{$loop->index+1??''}}</th>
                                            <td>{{$dt->name}}</td>
                                            <td>{{$dt->email}}</td>
                                            <td>{{$dt->departure_date}}</td>
                                            <td>{{$dt->total_members}}</td>
                                            <td>{{$dt->number}}</td>
                                            <td>{{$dt->days}}</td>
                                            <td>{{$dt->description}}</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="{{route('delete-enquiry',$dt->id??'')}}" class="btn btn-primary"><i class="fa fa-trash" aria-hidden="true"></i> </a>
                                                </div>
                                            </td>
                                          </tr>
                                          @endforeach
                                        </tbody>
                                      </table>
                                </div>

                            </div>
                        </div><!-- End Recent Sales -->


                    </div>
                </div><!-- End Left side columns -->

            </div>
        </section>

    </main><!-- End #main -->
@endsection
