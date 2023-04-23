<?php

namespace App\Http\Controllers;

use App\Repo\PackageService;
use Illuminate\Http\Request;


class PackageController extends Controller
{
    private $packageService;

    public function __construct(PackageService $packageService){
        $this->packageService = $packageService;

    }

    public function addTourCategory(Request $request){
        return view('admin.hotels.package.add-category');
    }

    public function savePackageCategory(Request $request){

        $saveCategory = $this->packageService->savePackageCategory($request);
        if($saveCategory){
            return redirect()->route('add-tour-category')->withSuccess('Tour Package category addedd successfully.');
        } else {
            return redirect()->route('add-tour-category')->withError('Error in saving category please try again.');
        }
    }
    public function viewAllPackages(Request $request){

        $packageArr = $this->packageService->getPackageData($request);
        return view('admin.hotels.package.show-packages', compact('packageArr'));
    }

    public function addTourPackage(Request $request){

        $getTourCategory = $this->packageService->getCategoryData($request);
        return view('admin.hotels.package.add-package', compact('getTourCategory'));
    }

    public function editTourPackage(Request $request){


        $getTourCategory = $this->packageService->getCategoryData($request);

        $getTourPackage = $this->packageService->getTourPackageData($request);

        $getTourImages = $this->packageService->getTourImages($request);

        return view('admin.hotels.package.add-package', compact('getTourCategory', 'getTourPackage', 'getTourImages'));
    }



    public function getCities(Request $request){
        $getCitiesData = $this->packageService->getcitiesgData($request);

        return response()->json($getCitiesData);
    }

    public function saveTourPackage(Request $request){

        $saveTour = $this->packageService->saveTourPackage($request);
        if($saveTour){
            return redirect()->route('view-all-packages')->withSuccess('Tour Package saved successfully.');
        } else {
            return redirect()->route('view-all-packages')->withError('Error in saving tour package please try again.');
        }
    }





}
