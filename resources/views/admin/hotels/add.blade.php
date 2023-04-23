@extends('layouts.admin')

@section('content')
    <main id="main" class="main">

        <?php
        if(isset($hotelId) && $hotelId != ''){
            $labelFor = "Update";
        } else {
            $labelFor = "Add";
        }
        ?>
        <div class="pagetitle">
            <h1><?php echo $labelFor; ?> Hotel</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><?php echo $labelFor; ?> Hotel</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <!-- General Form Elements -->


                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $labelFor; ?> Hotel Information</h5>

                                <!-- Default Tabs -->
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="basic-tab" data-bs-toggle="tab"
                                            data-bs-target="#basic" type="button" role="tab" aria-controls="basic"
                                            aria-selected="true">Basic Detail</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="address-tab" data-bs-toggle="tab"
                                            data-bs-target="#address" type="button" role="tab" aria-controls="address"
                                            aria-selected="false">Address Information</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="amenities-tab" data-bs-toggle="tab"
                                            data-bs-target="#amenities" type="button" role="tab" aria-controls="amenities"
                                            aria-selected="false">Amenities Management</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="hotel-images" data-bs-toggle="tab"
                                            data-bs-target="#hotelImages" type="button" role="tab" aria-controls="hotelImages"
                                            aria-selected="false">Gallery Management</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                            data-bs-target="#contact" type="button" role="tab" aria-controls="contact"
                                            aria-selected="false">Contact Information</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="gst-tab" data-bs-toggle="tab"
                                            data-bs-target="#gst" type="button" role="tab" aria-controls="gst"
                                            aria-selected="false">GST information</button>
                                    </li>
                                </ul>
                                <?php
                                    if(isset($hotelId) && $hotelId != ''){
                                        ?>
                                        <form name="hotelForm" method="POST" enctype="multipart/form-data" action="{{ url('update-hotel')  }}/<?php echo $hotelId;?>">
                                        <?php
                                    } else {
                                        ?>
                                        <form name="hotelForm" method="POST" enctype="multipart/form-data" action="{{ route('save-hotel')  }}">
                                        <?php
                                    }
                                ?>
                                    @csrf

                                    <div class="tab-content pt-2" id="myTabContent">
                                        {{-- BOF HOTEL BASIC DETAIL FORM GOES HERE --}}
                                        <div class="tab-pane fade show active" id="basic" role="tabpanel" aria-labelledby="basic-tab">
                                            <div class="row mb-3">
                                                <label for="inputText" class="col-sm-2 col-form-label">Hotel Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="hotelName" value="<?php echo (isset($hotelDetail->hotel_name) ? $hotelDetail->hotel_name : ''); ?>">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="inputEmail" class="col-sm-2 col-form-label">Short Description</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="shortDesc" value="<?php echo (isset($hotelDetail->short_description) ? $hotelDetail->short_description : ''); ?>">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="inputEmail" class="col-sm-2 col-form-label">Long Description</label>
                                                <div class="col-sm-10">
                                                    <div class="quill-editor-full">
                                                        <?php
                                                            echo (isset($hotelDetail->description) ? $hotelDetail->description : 'Enter hotel details here');
                                                        ?>
                                                    </div>

                                                    <textarea name="longDesc" style="display:none;" id="longDesc"><?php
                                                            echo (isset($hotelDetail->description) ? $hotelDetail->description : '');
                                                        ?></textarea>

                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="inputNumber" class="col-sm-2 col-form-label"></label>
                                                <div class="col-sm-10">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;<br/><br/>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label">Property Type</label>
                                                <div class="col-sm-10">
                                                    <select class="form-select" aria-label="Default select example" name="propertyType" required>
                                                        <option value="">-Select-</option>
                                                        <option value="0" <?php echo (isset($hotelDetail->property_type) && $hotelDetail->property_type == 0 ? 'selected' : '' ); ?> >Hotel</option>
                                                        <option value="1" <?php echo (isset($hotelDetail->property_type) && $hotelDetail->property_type == 1 ? 'selected' : '' ); ?>>Resort</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="inputEmail" class="col-sm-2 col-form-label">Hotel Email Id</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="hotelEmailId" value="<?php echo (isset($hotelDetail->hotel_email_id) ? $hotelDetail->hotel_email_id : ''); ?>">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="inputEmail" class="col-sm-2 col-form-label">Hotel Phone No</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="hotelPhoneNo" value="<?php echo (isset($hotelDetail->hotel_phone_no) ? $hotelDetail->hotel_phone_no : ''); ?>">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label">Property Type</label>
                                                <div class="col-sm-10">
                                                    <select class="form-select" aria-label="Default select example" name="status" required>
                                                        <option value="">-Select-</option>
                                                        <option value="0" <?php echo (isset($hotelDetail->is_verify) && $hotelDetail->is_verify == 0 ? 'selected' : '' ); ?> >Inactive</option>
                                                        <option value="1" <?php echo (isset($hotelDetail->is_verify) && $hotelDetail->is_verify == 1 ? 'selected' : '' ); ?>>Active</option>

                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                        {{-- EOF HOTEL BASIC DETAIL FORM GOES HERE --}}

                                        {{-- BOF HOTEL ADDRESS DETAIL FORM GOES HERE --}}
                                        <div class="tab-pane fade" id="address" role="tabpanel" aria-labelledby="profile-tab">
                                            <div class="row mb-3">
                                                <label for="inputText" class="col-sm-2 col-form-label">Address</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="address" value="<?php echo (isset($hotelDetail->address) ? $hotelDetail->address : ''); ?>">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label">Pincode</label>
                                                <div class="col-sm-10">
                                                    <select class="form-select" aria-label="Default select example" name="pincodeId" required>
                                                        <option value="">-Select-</option>
                                                        <option value="99271" <?php echo (isset($hotelDetail->pincodes) && $hotelDetail->pincodes == 99271 ? 'selected' : '' ); ?>>302001</option>
                                                        <option value="99287" <?php echo (isset($hotelDetail->pincodes) && $hotelDetail->pincodes == 99287 ? 'selected' : '' ); ?>>302006</option>
                                                        <option value="99285" <?php echo (isset($hotelDetail->pincodes) && $hotelDetail->pincodes == 99285 ? 'selected' : '' ); ?>>302016</option>
                                                        <option value="99284" <?php echo (isset($hotelDetail->pincodes) && $hotelDetail->pincodes == 99284 ? 'selected' : '' ); ?>>302019</option>
                                                        <option value="99247" <?php echo (isset($hotelDetail->pincodes) && $hotelDetail->pincodes == 99247 ? 'selected' : '' ); ?>>302037</option>
                                                        <option value="99237" <?php echo (isset($hotelDetail->pincodes) && $hotelDetail->pincodes == 99237 ? 'selected' : '' ); ?>>302038</option>
                                                        <option value="107841" <?php echo (isset($hotelDetail->pincodes) && $hotelDetail->pincodes == 107841 ? 'selected' : '' ); ?>>307501</option>
                                                        <option value="103945" <?php echo (isset($hotelDetail->pincodes) && $hotelDetail->pincodes == 103945 ? 'selected' : '' ); ?>>313001</option>
                                                        <option value="103741" <?php echo (isset($hotelDetail->pincodes) && $hotelDetail->pincodes == 103741 ? 'selected' : '' ); ?>>313022</option>
                                                        <option value="100422" <?php echo (isset($hotelDetail->pincodes) && $hotelDetail->pincodes == 100422 ? 'selected' : '' ); ?>>322001</option>
                                                        <option value="100410" <?php echo (isset($hotelDetail->pincodes) && $hotelDetail->pincodes == 100410 ? 'selected' : '' ); ?>>322021</option>
                                                        <option value="100419" <?php echo (isset($hotelDetail->pincodes) && $hotelDetail->pincodes == 100419 ? 'selected' : '' ); ?>>322029</option>
                                                        <option value="106003" <?php echo (isset($hotelDetail->pincodes) && $hotelDetail->pincodes == 106003 ? 'selected' : '' ); ?>>342001</option>
                                                        <option value="105917" <?php echo (isset($hotelDetail->pincodes) && $hotelDetail->pincodes == 105917 ? 'selected' : '' ); ?>>342003</option>
                                                        <option value="105796" <?php echo (isset($hotelDetail->pincodes) && $hotelDetail->pincodes == 105796 ? 'selected' : '' ); ?>>342005</option>
                                                        <option value="105720" <?php echo (isset($hotelDetail->pincodes) && $hotelDetail->pincodes == 105720 ? 'selected' : '' ); ?>>342007</option>
                                                        <option value="106001" <?php echo (isset($hotelDetail->pincodes) && $hotelDetail->pincodes == 106001 ? 'selected' : '' ); ?>>342008</option>
                                                        <option value="155617" <?php echo (isset($hotelDetail->pincodes) && $hotelDetail->pincodes == 155617 ? 'selected' : '' ); ?>>342009</option>
                                                        <option value="105956" <?php echo (isset($hotelDetail->pincodes) && $hotelDetail->pincodes == 105956 ? 'selected' : '' ); ?>>342027</option>
                                                        <option value="106019" <?php echo (isset($hotelDetail->pincodes) && $hotelDetail->pincodes == 106019 ? 'selected' : '' ); ?>>342301</option>
                                                        <option value="106014" <?php echo (isset($hotelDetail->pincodes) && $hotelDetail->pincodes == 106014 ? 'selected' : '' ); ?>>345001</option>
                                                        <option value="105843" <?php echo (isset($hotelDetail->pincodes) && $hotelDetail->pincodes == 105843 ? 'selected' : '' ); ?>>345033</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="inputEmail" class="col-sm-2 col-form-label">Map Location</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="mapLocation" value="<?php echo (isset($hotelDetail->map_location) ? $hotelDetail->map_location : ''); ?>">
                                                </div>
                                            </div>


                                        </div>
                                        {{-- EOF HOTEL ADDRESS DETAIL FORM GOES HERE --}}


                                        {{-- BOF HOTEL AMENITIES HERE --}}
                                        <div class="tab-pane fade" id="amenities" role="tabpanel" aria-labelledby="contact-tab">
                                            <?php
                                                if(count($aminityData) > 0){
                                                    foreach($aminityData as $key => $aminity){
                                                        ?>
                                                        <div>
                                                            <h4 style="font-size:17px; font-weight:bold; text-decoration:underline;">
                                                                <?php echo $aminity['title']; ?>
                                                            </h4>
                                                            <hr>
                                                            <?php
                                                            if(isset($aminity['children']) && count($aminity['children']) > 0){
                                                                foreach($aminity['children'] as $child){
                                                                    ?>
                                                                    <div class="form-check form-switch" style="float:left !important; width:250px !important;">
                                                                        <input
                                                                        class="form-check-input"
                                                                        type="checkbox"
                                                                        name="aminitiesArr[]"
                                                                        <?php echo ( in_array($child['id'], $amenityArr) ? 'checked' : ''); ?>
                                                                        value="<?php echo $child['id']; ?>" />
                                                                            <?php echo $child['title']; ?>
                                                                    </div>
                                                                    <?php
                                                                }
                                                            }
                                                        ?>
                                                        </div>
                                                        <div style="clear:both;"> </div>
                                                        <br/>
                                                        <?php

                                                    }
                                                } else {
                                                    echo 'Add aminity here';
                                                }
                                            ?>
                                        </div>
                                        {{-- EOF HOTEL AMENITIES HERE --}}

                                        {{--BOF HOTEL GALLERY IMAGES --}}
                                        <div class="tab-pane fade" id="hotelImages" role="tabpanel" aria-labelledby="gallery-tab">
                                            <div class="row mb-3">
                                                <label for="inputNumber" class="col-sm-2 col-form-label">Upload Gallery Photo</label>
                                                <div class="col-sm-10">
                                                    <input accept="image/png, image/gif, image/jpeg" class="form-control" type="file" id="hotelGallery" name="hotelGallery[]" multiple >
                                                </div>
                                            </div>

                                            <?php
                                            if(count($hotelImageArr) > 0){
                                                ?>
                                                <div style="padding:10px">
                                                <?php
                                                foreach($hotelImageArr as $images){
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
                                        {{-- EOF HOTEL GALLERY IMAGES --}}


                                        {{-- BOF HOTEL CONTACT FORM GOES HERE --}}
                                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                            <div class="row mb-3">
                                                <label for="inputText" class="col-sm-2 col-form-label">Contact Person</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="contactPerson" value="<?php echo (isset($hotelDetail->contact_person) ? $hotelDetail->contact_person : ''); ?>">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label">Designation</label>
                                                <div class="col-sm-10">
                                                    <select class="form-select" aria-label="Default select example" name="designation" required>
                                                        <option value="">-Select-</option>
                                                        <option value="o" <?php echo (isset($hotelDetail->designation) && $hotelDetail->designation == 'o' ? 'selected' : '' ); ?>>Owner</option>
                                                        <option value="m" <?php echo (isset($hotelDetail->designation) && $hotelDetail->designation == 'm' ? 'selected' : '' ); ?>>Manager</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="inputText" class="col-sm-2 col-form-label">Mobile No</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="mobileNo" value="<?php echo (isset($hotelDetail->mobile_no) ? $hotelDetail->mobile_no : ''); ?>">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="inputText" class="col-sm-2 col-form-label">Email Id</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="emailId" value="<?php echo (isset($hotelDetail->email_id) ? $hotelDetail->email_id : ''); ?>">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="inputText" class="col-sm-2 col-form-label">Account No</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="accountNo" value="<?php echo (isset($hotelDetail->account_no) ? $hotelDetail->account_no : ''); ?>">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="inputText" class="col-sm-2 col-form-label">Account Holder Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="holderName" value="<?php echo (isset($hotelDetail->account_holder_name) ? $hotelDetail->account_holder_name : ''); ?>">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="inputText" class="col-sm-2 col-form-label">IFSC Code</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="ifscCode" value="<?php echo (isset($hotelDetail->ifsc_code) ? $hotelDetail->ifsc_code : ''); ?>">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="inputNumber" class="col-sm-2 col-form-label">Pan Card</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="file" id="panCard" name="panCard">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="inputNumber" class="col-sm-2 col-form-label">Cancel cheque</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="file" id="cancelCheque" name="cancelCheque">
                                                </div>
                                            </div>
                                        </div>
                                        {{-- EOF HOTEL HOTEL CONTACT FORM GOES HERE --}}


                                        {{-- BOF HOTEL GST INFORMATION FORM GOES HERE --}}
                                        <div class="tab-pane fade" id="gst" role="tabpanel" aria-labelledby="contact-tab">

                                            <div class="row mb-3">
                                                <label for="inputText" class="col-sm-2 col-form-label">Hotel GST Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="gstName" value="<?php echo (isset($hotelDetail->gst_name) ? $hotelDetail->gst_name : ''); ?>">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="inputText" class="col-sm-2 col-form-label">GST Number</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="gstNo" value="<?php echo (isset($hotelDetail->gst_no) ? $hotelDetail->gst_no : ''); ?>">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="inputNumber" class="col-sm-2 col-form-label">GST Certificate</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="file" name="gstPhoto" id="gstPhoto">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="inputText" class="col-sm-2 col-form-label">GST Address</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="gstAddress" value="<?php echo (isset($hotelDetail->gst_address) ? $hotelDetail->gst_address : ''); ?>">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="inputText" class="col-sm-2 col-form-label">Extra Charge</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="extraCharge" value="<?php echo (isset($hotelDetail->extra_charge) ? $hotelDetail->extra_charge : ''); ?>">
                                                </div>
                                            </div>
                                        </div>
                                        {{-- EOF HOTEL GST INFORMATION FORM GOES HERE --}}

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

    <script type="text/javascript">

        console.log(' inerhe');
        $(".quill-editor-full").keyup(function(){

            $('#longDesc').html($('.ql-editor').html());

            // console.log( $('.ql-editor').html() );
        });

        </script>

@endsection



