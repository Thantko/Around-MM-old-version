<?php
/**
 * Created by PhpStorm.
 * User: zwemunhtun
 * Date: 11/10/18
 * Time: 11:48 AM
 */

namespace App\ServiceModels;


use App\Models\Request;

class RequestModel
{
    function create_custom($data){
        $request = new Request();
        $request->name = $data['name'];
        $request->phno = $data['phno'];
        $request->address = $data['address'];
        $request->type = $data['package_id'];
        $request->description = $data['description'];
        return $request->save();
    }

    function get_requests(){
        $res = Request::where('status', 1)->orderBy('id','DESC')->get();
        return $res;
    }

    function delete_request($id){
        $request = Request::where('id', $id)->get()->first();
        $request->status = 0;
        return $request->save();
    }


    function get_requests_count(){
        $data = Request::where('status', 1)->get()->count();
        return $data;
    }

}