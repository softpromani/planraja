<?php

namespace App\Http\Controllers;

use App\Models\Hotels;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Request;


use App\Repo\HotelService;

class HotelController extends Controller
{
    private $hotelService;

    public function __construct(HotelService $hotelService){
        $this->hotelService = $hotelService;
    }

    public function index(Request $request){

        $hotelArr = $this->hotelService->getHotelData($request);

        return view('admin.hotels.index', compact('hotelArr'));
    }
    public function addHotels(Request $request){

        $amenityArr = [];
        $aminityData = getAminitiesdata();
        $hotelImageArr = [];

        return view('admin.hotels.add', compact('aminityData', 'amenityArr', 'hotelImageArr'));
    }

    public function saveHotel(Request $request){

        $saveHotel = $this->hotelService->saveHotelData($request);

        if($saveHotel){
            return redirect()->route('view-hotels')->withSuccess('Hotel addedd successfully.');
        } else {
            return redirect()->route('view-hotels')->withError('Error in saving hotel please try again.');
        }
    }
    public function editHotels(Request $request){

        $hotelDetail = $this->hotelService->getHotelDetail($request);

        $aminityData = getAminitiesdata();
        $hotelId = $request->hotelId;

        $hotelImageArr = [];

        $hotelImageArr = getHotelImages($request->hotelId);

        $amenityArr = [];
        if($hotelDetail->amenities != ''){
            $amenityArr = explode(',', $hotelDetail->amenities);
        }

        if($hotelDetail != FALSE){
            return view('admin.hotels.add', compact('hotelDetail', 'aminityData', 'amenityArr', 'hotelId', 'hotelImageArr'));
        } else {
            return redirect()->route('view-hotels')->withError('Something went wrong please try again!');
        }
    }

    public function updateHotel(Request $request){

        $updateHotel = $this->hotelService->updateHotelData($request);

        if($updateHotel){
            return redirect()->route('view-hotels')->withSuccess('Hotel details updated successfully.');
        } else {
            return redirect()->route('view-hotels')->withError('Error in updating hotel please try again.');
        }
    }

    public function viewAmenities(Request $request){
        $amenitiesArr = $this->hotelService->getAmenitiesData($request, 'child');
        return view('admin.hotels.view-amenities', compact('amenitiesArr'));
    }

    public function addAmenities(Request $request){
        $amenitiesArr = $this->hotelService->getAmenitiesData($request, 'parent');
        return view('admin.hotels.add-amenities', compact('amenitiesArr'));
    }

    public function editAmenities(Request $request){

        $amenitiesArr = $this->hotelService->getAmenitiesData($request, 'parent');

        $aminityDetail = $this->hotelService->getAmenityDetail($request);

        $amenityId = $request->amenityId;

        // echo "<pre>";
        // print_r($amenitiesArr);
        // print_r($aminityDetail);
        // exit;
        if($aminityDetail != FALSE){
            return view('admin.hotels.add-amenities', compact('amenitiesArr', 'aminityDetail', 'amenityId'));
        } else {
            return redirect()->route('view-hotels')->withError('Something went wrong please try again!');
        }
    }

    public function updateAmenities(Request $request){
        $updateAmity = $this->hotelService->updateAmityData($request);

        if($updateAmity){
            return redirect()->route('view-amenities')->withSuccess('Aminity detail updated successfully.');
        } else {
            return redirect()->route('view-amenities')->withError('Error in updating aminity please try again.');
        }
    }



    public function saveAmenities(Request $request){

        $saveCategory = $this->hotelService->saveAmenities($request);
        if($saveCategory){
            return redirect()->route('view-amenities')->withSuccess('Amenity addedd successfully.');
        } else {
            return redirect()->route('view-amenities')->withError('Error in saving hotel please try again.');
        }
    }


    public function addCategory(Request $request){
        return view('admin.hotels.add-amenities-cat');
    }

    public function saveCategory(Request $request){

        $saveCategory = $this->hotelService->saveCategory($request);
        if($saveCategory){
            return redirect()->route('add-amenities')->withSuccess('Amenity category addedd successfully.');
        } else {
            return redirect()->route('view-hotels')->withError('Error in saving hotel please try again.');
        }
    }




}
