@extends('layouts.admin')

@section('content')
    <main id="main" class="main">

        <?php
            if(isset($amenityId) && $amenityId != ''){
                $labelFor = 'Update';
            } else {
                $labelFor = 'Add';
            }
        ?>

        <div class="pagetitle">
            <h1><?php echo $labelFor; ?> Amenities</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><?php echo $labelFor; ?> Amenities</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <!-- General Form Elements -->


                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <?php echo $labelFor; ?> Amenities Information
                                </h5>

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

                                <?php
                                    if(isset($amenityId) && $amenityId != ''){
                                        ?>
                                        <form name="hotelForm" method="POST" enctype="multipart/form-data" action="{{ url('update-amenities')  }}/<?php echo $amenityId;?>">
                                        <?php
                                    } else {
                                        ?>
                                        <form name="hotelForm" method="POST" enctype="multipart/form-data" action="{{ route('save-amenities')  }}">
                                        <?php
                                    }
                                ?>
                                    @csrf

                                    <div class="tab-content pt-2" id="myTabContent">
                                        <div class="tab-pane fade show active" id="basic" role="tabpanel" aria-labelledby="basic-tab">

                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label">Select Category</label>
                                                <div class="col-sm-10">
                                                    <select class="form-select" aria-label="Default select example" name="parentCategory" required>
                                                        <option value="">-Select-</option>
                                                        <?php
                                                            if(count($amenitiesArr) > 0){
                                                                foreach($amenitiesArr as $amen){
                                                                    ?>
                                                                    <option
                                                                    <?php echo (isset($aminityDetail->is_parent) && $aminityDetail->is_parent == $amen['id'] ? 'selected' : '' ); ?>
                                                                    value="{{ $amen['id']  }}">

                                                                        {{ $amen['title']  }}
                                                                    </option>
                                                                    <?php
                                                                }
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="inputEmail" class="col-sm-2 col-form-label">Amenities Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="amenitiesName" value="<?php echo (isset($aminityDetail->title) ? $aminityDetail->title : ''); ?>" required>
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
{{--
    <script type="text/javascript">

        console.log(' inerhe');
        $(".quill-editor-full").keyup(function(){

            $('#longDesc').html($('.ql-editor').html());

            // console.log( $('.ql-editor').html() );
        });

        </script> --}}

@endsection



