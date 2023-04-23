<?php
namespace App\Repo;

use App\Models\Hotels;
use App\Models\HotelPhotos;
use Illuminate\Http\Request;
use App\Models\HotelContacts;
use App\Models\HotelAddresses;
use App\Models\HotelAmenities;
use App\Models\HotelGstDetails;
use Illuminate\Support\Facades\File;

class HotelService
{
    public function getHotelData(Request $request)
    {
        $hotelArr = Hotels::select('hotels.*')
            ->orderBy('id', 'desc')
            ->get()
            ->toArray();
        return $hotelArr;
    }

    public function getHotelDetail(Request $request)
    {
        $getHotelDetail = Hotels::select('hotels.*', 'hotel_addresses.*', 'hotel_contacts.*', 'hotel_gst_details.*')
            ->leftJoin('hotel_addresses', 'hotel_addresses.hotel_id', 'hotels.id')
            ->leftJoin('hotel_contacts', 'hotel_contacts.hotel_id', 'hotels.id')
            ->leftJoin('hotel_gst_details', 'hotel_gst_details.hotel_id', 'hotels.id')
            ->where('hotels.id', $request->hotelId)
            ->first();

        if (isset($getHotelDetail->id) && $getHotelDetail->id != '') {
            return $getHotelDetail;
        } else {
            return false;
        }
    }

    public function saveHotelData(Request $request)
    {
        // LETS SAVE HOTEL DETAILS HERE
        // echo "<Pre>";
        // print_r($request->all());
        // exit;
        $newHotel = new Hotels();
        $newHotel->hotel_name = $request->hotelName;
        $newHotel->short_description = $request->shortDesc;
        $newHotel->description = $request->longDesc;
        $newHotel->hotel_email_id = $request->hotelEmailId;
        $newHotel->hotel_phone_no = $request->hotelPhoneNo;
        if (isset($request->aminitiesArr) && count($request->aminitiesArr) > 0) {
            $newHotel->amenities = implode(',', $request->aminitiesArr);
        }
        $newHotel->property_type = $request->propertyType;
        $newHotel->is_verify = $request->status;
        $newHotel->save();

        $hotelId = $newHotel->id;

        // LETS SAVE HOTEL ADDRESS HERE
        $hotelAddress = new HotelAddresses();
        $hotelAddress->hotel_id = $hotelId;
        $hotelAddress->address = $request->address;
        $hotelAddress->pincodes = $request->pincodeId;
        $hotelAddress->map_location = $request->mapLocation;
        $hotelAddress->save();

        // LETS SAVE HOTEL CONTACT NOW
        $hotelContact = new HotelContacts();
        $hotelContact->hotel_id = $hotelId;
        $hotelContact->contact_person = $request->contactPerson;
        $hotelContact->designation = $request->designation;
        $hotelContact->mobile_no = $request->mobileNo;
        $hotelContact->email_id = $request->emailId;
        $hotelContact->account_no = $request->accountNo;
        $hotelContact->account_holder_name = $request->holderName;
        $hotelContact->ifsc_code = $request->ifscCode;
        // $hotelContact->pan_card_photo = $request->id;
        // $hotelContact->cancel_cheque_photo = $request->id;

        if ($request->hasfile('panCard')) {
            $imgArr = ['jpeg', 'jpg', 'png', 'pdf'];
            // WE NEED TO VALIDATE HERE IF THE UPLOADED FILE IS JPEG ONLY ELSE RETURN FROM HERE
            $filePan = $request->file('panCard');
            if (!in_array($filePan->getClientOriginalExtension(), $imgArr)) {
                return false;
            }
            $fileName = time().'_pan_card.'.$filePan->getClientOriginalExtension();
            $filePath = "hotels/".encrypt_decrypt($hotelId);
            $filePan->move(public_path() . "/" . $filePath.'/', $fileName);

            $hotelContact->pan_card_photo = $filePath.'/'.$fileName;
        }

        if ($request->hasfile('cancelCheque')) {
            $imgArr = ['jpeg', 'jpg', 'png', 'pdf'];
            // WE NEED TO VALIDATE HERE IF THE UPLOADED FILE IS JPEG ONLY ELSE RETURN FROM HERE
            $fileCheque = $request->file('cancelCheque');
            if (!in_array($fileCheque->getClientOriginalExtension(), $imgArr)) {
                return false;
            }
            $fileNameCheque = time().'_cancel_cheque.'.$fileCheque->getClientOriginalExtension();

            // $fileCheque->move(public_path() . "/" . '/hotels/' . $hotelId . '/documents/', $fileNameCheque);

            $filePath = "hotels/".encrypt_decrypt($hotelId);
            $fileCheque->move(public_path() . "/" . $filePath.'/', $fileNameCheque);
            $hotelContact->cancel_cheque_photo = $filePath.'/'.$fileNameCheque;
        }

        $hotelContact->save();

        // LETS SAVE HOTEL GST DETAIL NOW
        $hotelGST = new HotelGstDetails();
        $hotelGST->hotel_id = $hotelId;
        $hotelGST->gst_no = $request->gstNo;
        // $hotelGST->gst_photo = $request->gstPhoto;
        $hotelGST->gst_name = $request->gstName;
        $hotelGST->gst_address = $request->gstAddress;
        $hotelGST->extra_charge = $request->extraCharge;
        if ($request->hasfile('gstPhoto')) {
            $imgArr = ['jpeg', 'jpg', 'png', 'pdf'];
            // WE NEED TO VALIDATE HERE IF THE UPLOADED FILE IS JPEG ONLY ELSE RETURN FROM HERE
            $fileGst = $request->file('gstPhoto');
            if (!in_array($fileGst->getClientOriginalExtension(), $imgArr)) {
                return false;
            }
            $fileNameGst = time().'_gst.'.$fileGst->getClientOriginalExtension();

            // $fileGst->move(public_path() . "/" . '/hotels/' . $hotelId . '/documents/', $fileNameGst);
            $filePath = "hotels/".encrypt_decrypt($hotelId);
            $fileGst->move(public_path() . "/" . $filePath.'/', $fileNameGst);
            $hotelGST->gst_photo = $filePath.'/'.$fileNameGst;
        }
        $hotelGST->save();

        //LETS UPDAET HOTEL IMAGES HERE
        if ($request->hasfile('hotelGallery')) {
            $imgArr = ['jpeg', 'jpg', 'png'];
            // WE NEED TO VALIDATE HERE IF THE UPLOADED FILE IS JPEG ONLY ELSE RETURN FROM HERE
            foreach ($request->file('hotelGallery') as $file) {
                if (!in_array($file->getClientOriginalExtension(), $imgArr)) {
                    return false;
                }
            }

            $i = 1;
            foreach ($request->file('hotelGallery') as $file) {
                $imageName = time() . '_' . $i . '.' . $file->getClientOriginalExtension();

                $filePath = "hotels/".encrypt_decrypt($hotelId);
                $file->move(public_path() . "/" . $filePath.'/', $imageName);

                // $file->move(public_path() . "/" . '/hotels/' . $hotelId . '/', $imageName);

                // INSERTING NEW IMAGE HERE
                $newImage = new HotelPhotos();
                $newImage->hotel_id = $hotelId;
                $newImage->image = $filePath."/".$imageName;
                $newImage->save();

                $i++;
            }
        }

        return true;
    }
    public function updateHotelData(Request $request)
    {
        // echo "<Pre>";
        // print_r($request->all());
        // exit;

        $hotelId = $request->hotelId;

        $newHotel = Hotels::find($hotelId);
        $newHotel->hotel_name = $request->hotelName;
        $newHotel->short_description = $request->shortDesc;
        $newHotel->description = $request->longDesc;
        $newHotel->hotel_email_id = $request->hotelEmailId;
        $newHotel->hotel_phone_no = $request->hotelPhoneNo;

        if ( isset($request->aminitiesArr) && count($request->aminitiesArr) > 0) {
            $newHotel->amenities = implode(',', $request->aminitiesArr);
        }
        $newHotel->property_type = $request->propertyType;
        $newHotel->is_verify = $request->status;
        $newHotel->update();

        // LETS UPDATE HOTEL ADDRESS HERE
        $newHotel->hotelAddress->address = $request->address;
        $newHotel->hotelAddress->pincodes = $request->pincodeId;
        $newHotel->hotelAddress->map_location = $request->mapLocation;
        $newHotel->hotelAddress->update();

        // LETS UPDATE HOTEL CONTACT NOW
        $newHotel->hotelContact->contact_person = $request->contactPerson;
        $newHotel->hotelContact->designation = $request->designation;
        $newHotel->hotelContact->mobile_no = $request->mobileNo;
        $newHotel->hotelContact->email_id = $request->emailId;
        $newHotel->hotelContact->account_no = $request->accountNo;
        $newHotel->hotelContact->account_holder_name = $request->holderName;
        $newHotel->hotelContact->ifsc_code = $request->ifscCode;

        if ($request->hasfile('panCard')) {
            $imgArr = ['jpeg', 'jpg', 'png', 'pdf'];
            // WE NEED TO VALIDATE HERE IF THE UPLOADED FILE IS JPEG ONLY ELSE RETURN FROM HERE
            $filePan = $request->file('panCard');
            if (!in_array($filePan->getClientOriginalExtension(), $imgArr)) {
                return false;
            }
            // $fileName = time().'_pan_card.'.$filePan->getClientOriginalExtension();
            // $filePan->move(public_path() . "/" . '/hotels/' . $hotelId . '/documents/', $fileName);
            // $newHotel->hotelContact->pan_card_photo = $fileName;
            $fileName = time().'_pan_card.'.$filePan->getClientOriginalExtension();
            $filePath = "hotels/".encrypt_decrypt($hotelId);
            $newHotel->move(public_path() . "/" . $filePath.'/', $fileName);
            $newHotel->hotelContact->pan_card_photo = $filePath.'/'.$fileName;
        }

        if ($request->hasfile('cancelCheque')) {
            $imgArr = ['jpeg', 'jpg', 'png', 'pdf'];
            // WE NEED TO VALIDATE HERE IF THE UPLOADED FILE IS JPEG ONLY ELSE RETURN FROM HERE
            $fileCheque = $request->file('cancelCheque');
            if (!in_array($fileCheque->getClientOriginalExtension(), $imgArr)) {
                return false;
            }
            // $fileNameCheque = time().'_cancel_cheque.'.$fileCheque->getClientOriginalExtension();
            // $fileCheque->move(public_path() . "/" . '/hotels/' . $hotelId . '/documents/', $fileNameCheque);
            // $newHotel->hotelContact->cancel_cheque_photo = $fileNameCheque;

            $fileNameCheque = time().'_cancel_cheque.'.$fileCheque->getClientOriginalExtension();
            $filePath = "hotels/".encrypt_decrypt($hotelId);
            $fileCheque->move(public_path() . "/" . $filePath.'/', $fileNameCheque);
            $newHotel->hotelContact->cancel_cheque_photo = $filePath.'/'.$fileNameCheque;

        }

        $newHotel->hotelContact->update();


        // LETS UPDATE HOTEL GST DETAIL NOW
        $newHotel->hotelGst->gst_no = $request->gstNo;
        $newHotel->hotelGst->gst_name = $request->gstName;
        $newHotel->hotelGst->gst_address = $request->gstAddress;
        $newHotel->hotelGst->extra_charge = $request->extraCharge;

        if ($request->hasfile('gstPhoto')) {
            $imgArr = ['jpeg', 'jpg', 'png', 'pdf'];
            // WE NEED TO VALIDATE HERE IF THE UPLOADED FILE IS JPEG ONLY ELSE RETURN FROM HERE
            $fileGst = $request->file('gstPhoto');
            if (!in_array($fileGst->getClientOriginalExtension(), $imgArr)) {
                return false;
            }
            // $fileNameGst = time().'_gst.'.$fileGst->getClientOriginalExtension();
            // $fileGst->move(public_path() . "/" . '/hotels/' . $hotelId . '/documents/', $fileNameGst);
            // $newHotel->hotelContact->gst_photo = $fileNameGst;

            $fileNameGst = time().'_gst.'.$fileGst->getClientOriginalExtension();
            $filePath = "hotels/".encrypt_decrypt($hotelId);
            $fileGst->move(public_path() . "/" . $filePath.'/', $fileNameGst);
            $newHotel->hotelContact->gst_photo = $filePath.'/'.$fileNameGst;

        }
        $newHotel->hotelGst->update();

        //LETS UPDAET HOTEL IMAGES HERE
        if ($request->hasfile('hotelGallery')) {
            $imgArr = ['jpeg', 'jpg', 'png'];
            // WE NEED TO VALIDATE HERE IF THE UPLOADED FILE IS JPEG ONLY ELSE RETURN FROM HERE
            foreach ($request->file('hotelGallery') as $file) {
                if (!in_array($file->getClientOriginalExtension(), $imgArr)) {
                    return false;
                }
            }
            // OKAY WE GOT FILES HERE WE NEED TO REMOVE EARLIER UPLOADS
            // $hotelImages = HotelPhotos::select('*')
            //     ->where('hotel_id', $hotelId)
            //     ->get();

            // if (isset($hotelImages[0]->id) && $hotelImages[0]->id != '') {
            //     // WE NEED TO REMOVE IMAGES HERE AND DATABASE ENTRY TOO
            //     $picture = HotelPhotos::where('hotel_id', $hotelId);
            //     $picture->delete();

            //     foreach ($hotelImages as $hotImage) {
            //         // NEED TO REMOVE THOSE FILES FROM SERVER TOO
            //         $file_path = public_path() . "/" . '/hotels/' . $hotelId . '/' . $hotImage->image;
            //         unlink($file_path);
            //     }
            // }

            $i = 1;
            foreach ($request->file('hotelGallery') as $file) {
                // $imageName = time() . '_' . $i . '.' . $file->getClientOriginalExtension();
                // $file->move(public_path() . "/" . '/hotels/' . $hotelId . '/', $imageName);

                $imageName = time() . '_' . $i . '.' . $file->getClientOriginalExtension();
                $filePath = "hotels/".encrypt_decrypt($hotelId);
                $file->move(public_path() . "/" . $filePath.'/', $imageName);

                // INSERTING NEW IMAGE HERE
                $newImage = new HotelPhotos();
                $newImage->hotel_id = $hotelId;
                $newImage->image = $filePath."/".$imageName;
                $newImage->save();

                $i++;
            }
        }

        return true;
    }

    public function getAmenitiesData(Request $request, $amenitiesFor)
    {
        if ($amenitiesFor == 'child') {
            $amenitiesArr = HotelAmenities::select('hotel_amenities.id', 'hotel_amenities.title', 'ha2.title as category', 'hotel_amenities.created_at')
                ->join('hotel_amenities as ha2', 'hotel_amenities.is_parent', 'ha2.id')
                ->whereNotNull('hotel_amenities.is_parent')
                ->orderBy('hotel_amenities.title')
                ->get()
                ->toArray();
        } else {
            $amenitiesArr = HotelAmenities::select('id', 'title', 'created_at')
                ->whereNull('is_parent')
                ->orderBy('title')
                ->get()
                ->toArray();
        }

        return $amenitiesArr;
    }

    public function saveAmenities(Request $request)
    {
        $amenities = new HotelAmenities();
        $amenities->is_parent = $request->parentCategory;
        $amenities->title = $request->amenitiesName;
        $amenities->save();

        return true;
    }

    public function getAmenityDetail(Request $request)
    {
        $amenities = HotelAmenities::find($request->amenityId);
        return $amenities;
    }

    public function updateAmityData(Request $request)
    {
        $amenities = HotelAmenities::find($request->amenityId);
        $amenities->is_parent = $request->parentCategory;
        $amenities->title = $request->amenitiesName;
        $amenities->update();
        return true;
    }

    public function saveCategory(Request $request)
    {
        $amenities = new HotelAmenities();
        $amenities->title = $request->categoryname;
        $amenities->save();

        return true;
    }
}

?>
