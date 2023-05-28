<?php

namespace App\Http\Controllers;

use App\Models\Cities;
use App\Models\Contact;
use App\Models\Enquiry;
use App\Models\Eternity;
use App\Models\Hotels;
use App\Models\TourPackages;
use App\Repo\PackageService;
use Exception;
use Illuminate\Http\Request;


class PackageController extends Controller
{
    private $packageService;

    public function __construct(PackageService $packageService)
    {
        $this->packageService = $packageService;
    }

    public function addTourCategory(Request $request)
    {
        return view('admin.hotels.package.add-category');
    }

    public function savePackageCategory(Request $request)
    {

        $saveCategory = $this->packageService->savePackageCategory($request);
        if ($saveCategory) {
            return redirect()->route('add-tour-category')->withSuccess('Tour Package category addedd successfully.');
        } else {
            return redirect()->route('add-tour-category')->withError('Error in saving category please try again.');
        }
    }
    public function viewAllPackages(Request $request)
    {

        $packageArr = $this->packageService->getPackageData($request);
        return view('admin.hotels.package.show-packages', compact('packageArr'));
    }

    public function addTourPackage(Request $request)
    {

        $getTourCategory = $this->packageService->getCategoryData($request);
        return view('admin.hotels.package.add-package', compact('getTourCategory'));
    }

    public function editTourPackage(Request $request)
    {


        $getTourCategory = $this->packageService->getCategoryData($request);

        $getTourPackage = $this->packageService->getTourPackageData($request);

        $getTourImages = $this->packageService->getTourImages($request);

        return view('admin.hotels.package.add-package', compact('getTourCategory', 'getTourPackage', 'getTourImages'));
    }



    public function getCities(Request $request)
    {
        $getCitiesData = $this->packageService->getcitiesgData($request);

        return response()->json($getCitiesData);
    }

    public function saveTourPackage(Request $request)
    {
        $request->validate([
            'categoryname' => 'required',
            'tourCategoryId' => 'required',
            'shortDesc' => 'required',
            'longDesc' => 'required',
            'duration' => 'required',
            'days' => 'required',
            'startCityId' => 'required',
            'endCityId' => 'required',
            'status' => 'required',
        ]);
        $saveTour = $this->packageService->saveTourPackage($request);
        if ($saveTour) {
            return redirect()->route('view-all-packages')->withSuccess('Tour Package saved successfully.');
        } else {
            return redirect()->route('view-all-packages')->withError('Error in saving tour package please try again.');
        }
    }



    public function add_eternity($id)
    {
        $tourpackage = Eternity::where('package_id', $id)->get();
        $cities = Cities::where('state_id', 5)->get();
        return view('admin.hotels.package.add_eternity', compact('tourpackage', 'cities'));
    }
    public function hotel_eternity($id)
    {
        $hotels = Hotels::where('city_id', $id)->get();
        $html = '<option selected disabled hidden>-select-</option>';
        foreach ($hotels as $ht) {
            $html .= "<option value='" . $ht->id . "'>" . $ht->hotel_name . "</option>";
        }
        return $html;
    }
    public function store_eternity(Request $request)
    {
        $request->validate([
            'day' => 'required',
            'hotel_id' => 'required',
            'city_id' => 'required',
            'title' => 'required',
            'longDesc' => 'required',
        ]);
        try {
            foreach ($request->day as $key => $day) {
                $res = Eternity::updateOrCreate(['id' => $request->eternity_id[$key]], [
                    'day' => $day,
                    'hotel_id' => $request->hotel_id[$key],
                    'city_id' => $request->city_id[$key],
                    'title' => $request->title[$key],
                    'longdesc' => $request->longDesc[$key],
                ]);
            }
            if ($res) {
                return redirect()->route('view-all-packages')->with('success', 'Eternity created successfully');
            }
        } catch (Exception $ex) {
            return back()->with('error', $ex->getMessage());
        }
    }
    public function contact()
    {
        $data=Contact::get();
       return view('admin.enquiry_contact.contactdata',compact('data'));
    }
    public function enquiry()
    {
        $data = Enquiry::get();
        return view('admin.enquiry_contact.enquiry',compact('data'));

    }


    public function delete($id)
    {
        $del = Contact::find($id)->delete();
        if($del){
            return back()->with('toast_success','Contact Deleted Successfully!');
        }else{
            return back()->with('toast_error','Contact Not Deleted!');
        }
    }
    public function delete_enc($id)
    {
        $del = Enquiry::find($id)->delete();
        if($del){
            return back()->with('toast_success','Enquiry Deleted Successfully!');
        }else{
            return back()->with('toast_error','Enquiry Not Deleted!');
        }
    }
}
