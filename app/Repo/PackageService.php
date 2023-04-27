<?php
namespace App\Repo;

use App\Models\Cities;
use App\Models\Eternity;
use App\Models\TourPackageCategory;
use App\Models\TourPackageImages;
use App\Models\TourPackages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class PackageService
{
    public function savePackageCategory(Request $request)
    {
        $amenities = new TourPackageCategory();
        $amenities->category_name = $request->categoryname;
        $amenities->status = $request->status;
        $amenities->save();

        return true;
    }

    public function getPackageData(Request $request)
    {
        $getAllPackages = TourPackages::select('tour_packages.*', 'tour_package_categories.category_name', 'startCity.city_name as startCity', 'endCity.city_name as endCity')
            ->leftJoin('tour_package_categories', 'tour_package_categories.id', 'tour_packages.tour_category_id')
            ->leftJoin('cities as startCity', 'startCity.id', 'tour_packages.start_city')
            ->leftJoin('cities as endCity', 'endCity.id', 'tour_packages.end_city')
            ->orderBy('tour_packages.updated_at', 'desc')
            ->get();

        if (count($getAllPackages) > 0) {
            return $getAllPackages;
        } else {
            return false;
        }
    }

    public function getTourPackageData(Request $request)
    {
        $getPackages = TourPackages::select('tour_packages.*', 'tour_package_categories.category_name', 'startCity.city_name as startCity', 'endCity.city_name as endCity')
            ->leftJoin('tour_package_categories', 'tour_package_categories.id', 'tour_packages.tour_category_id')
            ->leftJoin('cities as startCity', 'startCity.id', 'tour_packages.start_city')
            ->leftJoin('cities as endCity', 'endCity.id', 'tour_packages.end_city')
            ->where('tour_packages.id', $request->id)
            ->first();

        if (isset($getPackages->id)) {
            return $getPackages;
        } else {
            return false;
        }
    }

    public function getTourImages(Request $request){
        return $tourImages = TourPackageImages::where('tour_id', $request->id)->get();
    }




    public function getCategoryData(Request $request)
    {
        $getCategories = TourPackageCategory::get();

        if (count($getCategories) > 0) {
            return $getCategories;
        } else {
            return false;
        }
    }

    public function getcitiesgData(Request $request)
    {
        $getCities = [];

        if($request->searchTerm != ''){
            $getCities = Cities::select('id', 'city_name')->where('city_name', 'like' ,'%'.$request->searchTerm.'%')->orderBy('city_name')->get();
        }


        if (count($getCities) > 0) {
            return $getCities;
        } else {
            return false;
        }
    }

    public function saveTourPackage(Request $request)
    {

        if($request->tourId != ''){
            // NEED TO UPDATE
            $addPackage = TourPackages::find($request->tourId);
        } else {
            // NEED TO ADD
            $addPackage = new TourPackages();
        }

        $addPackage->package_name = $request->categoryname;
        $addPackage->short_desc = $request->shortDesc;
        $addPackage->description = $request->longDesc;
        $addPackage->duration = $request->duration;
        $addPackage->days = $request->days;
        $addPackage->tour_category_id = $request->tourCategoryId;
        $addPackage->start_city = $request->startCityId;
        $addPackage->end_city = $request->endCityId;
        $addPackage->status = $request->status;
        $addPackage->save();

        $packageId = $addPackage->id;
        for($x = 0; $x <= $request->days; $x++){
            $res = Eternity::create([
                'day'=>$x+1,
                'package_id'=>$packageId,
            ]);
        }
        if ($request->hasfile('packageGallery')) {
            $imgArr = ['jpeg', 'jpg', 'png'];
            $i = 1;
            foreach ($request->file('packageGallery') as $file) {
                $imageName = time() . '_' . $i . '.' . $file->getClientOriginalExtension();

                $filePath = "packages/".encrypt_decrypt($packageId);
                $file->move(public_path() . "/" . $filePath.'/', $imageName);

                // $file->move(public_path() . "/" . '/hotels/' . $hotelId . '/', $imageName);

                // INSERTING NEW IMAGE HERE
                $newImage = new TourPackageImages();
                $newImage->tour_id = $packageId;
                $newImage->image = $filePath."/".$imageName;
                $newImage->save();

                $i++;
            }
        }


        return true;
    }




}
