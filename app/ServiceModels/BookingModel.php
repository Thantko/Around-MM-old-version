<?php
/**
 * Created by PhpStorm.
 * User: zwemunhtun
 * Date: 11/9/18
 * Time: 8:15 PM
 */

namespace App\ServiceModels;


use App\Models\Booking;

class BookingModel
{

    function book_package($data){
        $booking = new Booking();
        $booking->name = $data['name'];
        $booking->phno = $data['phno'];
        $booking->address = $data['address'];
        $booking->package_id = $data['package_id'];
        return $booking->save();
    }

    function get_bookings(){
        $res = Booking::with('package')->where('status', 1)->orderBy('id','DESC')->get();
        return $res;
    }

    function delete_booking($id){
        $booking = Booking::where('id', $id)->get()->first();
        $booking->status = 0;
        return $booking->save();
    }

    function get_bookings_count(){
        $data = Booking::where('status', 1)->get()->count();
        return $data;
    }

}