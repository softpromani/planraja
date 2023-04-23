@extends('layouts.admin')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Add Package Category</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Add Tour Package category</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <!-- General Form Elements -->

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Package Category</h5>

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

                                <form name="hotelForm" method="POST" enctype="multipart/form-data" action="{{ route('save-package-category')  }}">
                                    @csrf

                                    <div class="tab-content pt-2" id="myTabContent">
                                        <div class="tab-pane fade show active" id="basic" role="tabpanel" aria-labelledby="basic-tab">

                                            <div class="row mb-3">
                                                <label for="inputEmail" class="col-sm-2 col-form-label">Category name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="categoryname" required >
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="inputEmail" class="col-sm-2 col-form-label">Category Status</label>
                                                <div class="col-sm-10">
                                                    <select class="form-select" aria-label="Default select example" name="status" required>
                                                        <option value="">-Select-</option>
                                                        <option value="0">Inactive</option>
                                                        <option value="1">Active</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End Default Tabs -->

                                    <div class="row mb-12">
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>

                                </form><!-- End General Form Elements -->

                            </div>
                        </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection



