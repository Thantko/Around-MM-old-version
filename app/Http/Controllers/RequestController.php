<?php
/**
 * Created by PhpStorm.
 * User: zwemunhtun
 * Date: 11/10/18
 * Time: 11:48 AM
 */

namespace App\Http\Controllers;


use App\ServiceModels\RequestModel;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class RequestController
{

    function __construct()
    {
        $this->request = new RequestModel();
    }


    function request(){
        return view('layouts/user/request_custom');
    }


    function create(){
        $data = Input::get();
        $res = $this->request->create_custom($data);
        if ($res){
            return redirect()->back()->with('custom_message', 'Request Successfully');
        }

    }

    function get_all(){
        if (Session::get('user')){
            $data['request'] = $this->request->get_requests();

            return view('layouts/admin/request_list')->with($data);

        }else{
            return redirect('error');
        }
    }

    function delete($id){
        $res = $this->request->delete_request($id);
        if ($res){
            return redirect()->back();
        }
    }

}