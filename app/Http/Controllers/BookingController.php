<?php
/**
 * Created by PhpStorm.
 * User: zwemunhtun
 * Date: 11/9/18
 * Time: 8:14 PM
 */

namespace App\Http\Controllers;


use App\ServiceModels\BookingModel;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class BookingController
{
    function __construct()
    {
        $this->booking= new BookingModel();
    }

    function book(){
        $data = Input::get();
        $res = $this->booking->book_package($data);
        if ($res){
            Session::flash('book_msg', "Booking Successful");
            return Redirect::back();
        }
    }

    function get_all(){
        if (Session::get('user')){
            $data['booking'] = $this->booking->get_bookings();

            return view('layouts/admin/booking_list')->with($data);
        }else{
            return redirect('error');
        }

    }

    function delete($id){

        $res = $this->booking->delete_booking($id);
        if ($res){
            return redirect()->back();
        }
    }

}