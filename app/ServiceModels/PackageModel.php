<?php
/**
 * Created by PhpStorm.
 * User: zwemunhtun
 * Date: 11/4/18
 * Time: 3:38 PM
 */

namespace App\ServiceModels;


use App\Models\Package;

class PackageModel
{
    function create_package($data){
        //dd($data);
        $services = implode(',', $data['services']);

        $package = new Package();
        $package->id = bin2hex(random_bytes(16));
        $package->title = $data['title'];
        $package->description = $data['desc'];
        $package->route = $data['routes'];
        $package->amount = $data['amount'];
        $package->image = $data['image'];
        $package->start_date = $data['start_date'];
        $package->end_date = $data['end_date'];
        $package->services = $services;
        return $package->save();
    }

    function get_packages(){
        $data = Package::where('status', 1)->orderBy('created_at','desc')->get()->toArray();
        return $data;
    }

    function get_packages_count(){
        $data = Package::where('status', 1)->get()->count();
        return $data;
    }

    function delete_package($id){
        $package = Package::where('id', $id)->get()->first();
        $package->status = 0;
        return $package->save();
    }

    function search_by_id($id){
        $res = Package::where('id', $id)->first();
        return $res;
    }

    function edit_package($data){

        $package = Package::where('id', $data['id'])->get()->first();
        $services = implode(',', $data['services']);
        $package->title = $data['title'];
        $package->description = $data['desc'];
        $package->route = $data['routes'];
        $package->amount = $data['amount'];
        $package->start_date = $data['start_date'];
        $package->end_date = $data['end_date'];
        $package->services = $services;
        if (!empty($data['image'])){
            $package->image =$data['image'];
        }

        return $package->save();
    }


}