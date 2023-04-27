@extends('layouts.admin')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <?php
                $showMethod = '';
                if(isset($getTourPackage->id)){
                    $showMethod = "Edit";
                } else {
                    $showMethod = "Add";
                }
            ?>
            <h1><?php echo $showMethod;?> Tour Package</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><?php echo $showMethod;?> Tour Package</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <!-- General Form Elements -->

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $showMethod;?> Tour Package</h5>

                            <form name="hotelForm" method="POST" enctype="multipart/form-data"
                                action="{{ route('save-tour-package') }}">
                                @csrf


                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="basic-tab" data-bs-toggle="tab"
                                            data-bs-target="#basic" type="button" role="tab" aria-controls="basic"
                                            aria-selected="true">Basic Detail</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="address-tab" data-bs-toggle="tab"
                                            data-bs-target="#packageImages" type="button" role="tab" aria-controls="packageImages"
                                            aria-selected="false">Gallery Management</button>
                                    </li>
                                </ul>

                                <div class="tab-content pt-2" id="myTabContent">



                                    <div class="tab-pane fade show active" id="basic" role="tabpanel"
                                        aria-labelledby="basic-tab">
                                        <div class="row mb-3">
                                            <label for="inputEmail" class="col-sm-2 col-form-label">Package name</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="categoryname" value="<?php echo (isset($getTourPackage->package_name) ? $getTourPackage->package_name : ''); ?>" required>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label">Select Tour Package Category</label>
                                            <div class="col-sm-10">
                                                <select class="form-select" aria-label="Default select example" name="tourCategoryId" required>
                                                    <option value="">-Select-</option>
                                                    <?php
                                                        foreach($getTourCategory as $category)
                                                        {
                                                            ?>
                                                            <option value="<?php echo $category->id; ?>" <?php echo (isset($getTourPackage->tour_category_id) && $getTourPackage->tour_category_id ==  $category->id ? 'selected' : ''); ?>> <?php echo $category->category_name; ?> </option>
                                                            <?php
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="inputEmail" class="col-sm-2 col-form-label">Short Description</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" placeholder="Enter Short Description" id="shortDesc" name="shortDesc" style="height: 100px;"><?php echo (isset($getTourPackage->short_desc) ? $getTourPackage->short_desc : ''); ?></textarea>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="inputEmail" class="col-sm-2 col-form-label">Long Description</label>
                                            <div class="col-sm-10">
                                                <textarea class="editor form-control" placeholder="Enter Long Description" id="shortDesc" name="longDesc" style="height: 100px;"><?php echo (isset($getTourPackage->short_desc) ? $getTourPackage->short_desc : ''); ?></textarea>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="inputNumber" class="col-sm-2 col-form-label"></label>
                                            <div class="col-sm-10">
                                                &nbsp;&nbsp;&nbsp;&nbsp;<br/>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="inputEmail" class="col-sm-2 col-form-label">Duration</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="duration" value="<?php echo (isset($getTourPackage->duration) ? $getTourPackage->duration : ''); ?>" required>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail" class="col-sm-2 col-form-label">Days</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" name="days" value="{{ $getTourPackage->days??'' }}" required>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="inputEmail" class="col-sm-2 col-form-label">Select Start city</label>
                                            <div class="col-sm-10">

                                                <select class="form-select selectCity" aria-label="Default select example" id='startCityId' name="startCityId" required>
                                                    <option value=''>- Select City -</option>
                                                </select>
                                            </div>
                                        </div>

                                        <?php
                                        if(isset($getTourPackage->start_city)){
                                            ?>
                                            <script>
                                                $('#startCityId').empty().append($("<option/>").val('<?php echo $getTourPackage->start_city; ?>').text('<?php echo $getTourPackage->startCity; ?>')).val('<?php echo $getTourPackage->start_city; ?>').trigger("change");
                                            </script>
                                            <?php
                                        }
                                        ?>

                                        <div class="row mb-3">
                                            <label for="inputEmail" class="col-sm-2 col-form-label">Select End city</label>
                                            <div class="col-sm-10">
                                                <select class="form-select selectCity" aria-label="Default select example" id='endCityId' name="endCityId" required>
                                                    <option value=''>- Select City -</option>
                                                </select>
                                            </div>
                                        </div>


                                        <?php
                                        if(isset($getTourPackage->end_city)){
                                            ?>
                                            <script>
                                                $('#endCityId').empty().append($("<option/>").val('<?php echo $getTourPackage->end_city; ?>').text('<?php echo $getTourPackage->endCity; ?>')).val('<?php echo $getTourPackage->end_city; ?>').trigger("change");
                                            </script>
                                            <?php
                                        }
                                        ?>

                                        <div class="row mb-3">
                                            <label for="inputEmail" class="col-sm-2 col-form-label">Select Status</label>
                                            <div class="col-sm-10">
                                                <select class="form-select" aria-label="Default select example" name="status" required>
                                                    <option value="">-Select-</option>
                                                    <option value="0" <?php echo (isset($getTourPackage->status) && $getTourPackage->status ==  "0" ? 'selected' : ''); ?>>Inactive</option>
                                                    <option value="1" <?php echo (isset($getTourPackage->status) && $getTourPackage->status ==  "1" ? 'selected' : ''); ?>>Active</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="tab-pane fade" id="packageImages" role="tabpanel" aria-labelledby="gallery-tab">
                                        <div class="row mb-3">
                                            <label for="inputNumber" class="col-sm-2 col-form-label">Upload Gallery Photo</label>
                                            <div class="col-sm-10">
                                                <input accept="image/png, image/gif, image/jpeg" class="form-control" type="file" id="packageGallery" name="packageGallery[]" multiple >
                                            </div>
                                        </div>

                                        <?php

                                        if( isset($getTourImages) && count($getTourImages) > 0){
                                            ?>
                                            <div style="padding:10px">
                                            <?php
                                            foreach($getTourImages as $images){
                                                ?>
                                                <div style="padding:10px; float:left;">
                                                    {{-- 'hotels/'.$hotelId.'/'.$images->image --}}
                                                    <img src="<?php echo asset('/'.$images->image); ?>" width="200px" height="200px" />
                                                </div>
                                                <?php
                                            }
                                            ?>
                                            </div>
                                            <div style="clear:both;"> </div>
                                            <?php
                                        }
                                    ?>
                                    </div>

                                </div>

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

    <script type="text/javascript">
        $(document).ready(function() {

            $('.selectCity').select2();
            $(".selectCity").select2({
                ajax: {
                    url: "{{ route('get-cities') }}",
                    type: "get",
                    dataType: 'json',
                    delay: 250,
                    data: function(params) {
                        return {
                            searchTerm: params.term // search term
                        };
                    },
                    processResults: function(response) {

                        return {
                            results:  $.map(response, function (item) {
                                return {
                                    text: item.city_name,
                                    id: item.id
                                }
                            })
                        };
                    },
                    cache: true
                }
            });

            $(".quill-editor-full").keyup(function(){
                $('#longDesc').html($('.ql-editor').html());
            });

        });
    </script>
@endsection
