@extends('layouts.admin')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Add Package Eternity</h1>
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
                            <h5 class="card-title">Package Eternity</h5>
                            <div>
                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                            </div>

                            <div>
                                @if (Session::has('error'))
                                    <div class="alert alert-danger">
                                        {{ Session::get('error') }}
                                    </div>
                                @endif
                            </div>

                            <form name="hotelForm" method="POST" enctype="multipart/form-data" action="{{route('store_eternity')}}">
                                @csrf
                                @foreach ($tourpackage as $key=>$data)
                                <div>
                                    <div class="mb-3">
                                        <label for="inputEmail" class="col-sm-2 col-form-label">Day</label>
                                        <div class="col-sm-12">
                                            <input type="number" value="{{$data->day??''}}" readonly class="form-control" name="day[]" required>
                                        </div>
                                    </div>
                                    <input type="hidden" value="{{$data->id??''}}" name="eternity_id[]">
                                    <div class="mb-3">
                                        <label for="inputEmail" class="col-sm-2 col-form-label">Title</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" name="title[]" value="{{$data->title??''}}" required>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputEmail" class="col-sm-2 col-form-label">Long Description</label>
                                        <div class="col-sm-12">
                                            <textarea class="editor{{$key}} form-control" placeholder="Enter Long Description" id="shortDesc" name="longDesc[]"
                                                style="height: 100px;">{{$data->longdesc??''}}</textarea>
                                        </div>
                                    </div><!-- End Default Tabs -->
                                </div><!-- End Default Tabs -->
                                @endforeach
                                <div class="row mb-12">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>

                            </form><!-- End General Form Elements -->

                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>
    <!-- End #main -->
    @endsection
@section('script')
@foreach ($tourpackage as $key=>$data)
<script>
    ClassicEditor
        .create( document.querySelector( '.editor'+{{$key}} ) )
        .catch( error => {
            console.error( error );
        } );
</script>
@endforeach
@endsection
