<?php

use App\Models\HotelAmenities;
use App\Models\HotelPhotos;
use App\Models\Hotels;

function getAminitiesdata(){

    $aminityData = [];

    $childData = [];

    $aminityParentData = HotelAmenities::select('id', 'title')
    ->whereNull('is_parent')
    ->get();

    if(isset($aminityParentData[0]->id) && $aminityParentData[0]->id != ''){
        foreach($aminityParentData as $aminity){
            $parentArr = [];

            $parentArr['id'] = $aminity->id;
            $parentArr['title'] = $aminity->title;

            $aminityChildData = HotelAmenities::select('id', 'title')
            ->where('is_parent', $aminity->id)
            ->get();
            if(isset($aminityChildData[0]->id) && $aminityChildData[0] != ''){
                $childArr = [];

                foreach($aminityChildData as $child){
                    $childData['id'] = $child->id;
                    $childData['title'] = $child->title;
                    $childArr[] = $childData;
                }
            }
            $parentArr['children'] = $childArr;
            $aminityData[] = $parentArr;
            // $aminityData[][$aminity->title] = $childArr;
        }
    }
    return $aminityData;
}

function getHotelImages($hoteId){

    $hotelImages = HotelPhotos::select('*')->where('hotel_id', $hoteId)->get();

    return $hotelImages;
}

function encrypt_decrypt($string, $action="encrypt") {
    $output = false;

    $encrypt_method = "AES-256-CBC";
    $secret_key = 'NoF1UJz8zw6hZ2HYXoGeqy1sx2kxbT';
    $secret_iv = 'GmEhm07XWd8n79BiCmcQ1aXVgs9jXy';

    // hash
    $key = hash('sha256', $secret_key);

    // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
    $iv = substr(hash('sha256', $secret_iv), 0, 16);

    if ( $action == 'encrypt' ) {
        $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
        $output = base64_encode($output);
    } else if( $action == 'decrypt' ) {
        $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
    }

    return $output;
}

?>
