<?php
/**
 * Created by PhpStorm.
 * User: zwemunhtun
 * Date: 11/5/18
 * Time: 9:41 PM
 */

namespace App\ServiceModels;


use App\Models\Service;

class ServiceModel
{

    function get_services(){
        $data = Service::get()->toArray();
        return $data;
    }

    function create_service($data){
        $service = new Service();
        $service->name = $data['service_name'];
        return $service->save();
    }

    function update_service($data){
        $service = Service::where('id', $data['service_id'])->first();
        $service->name = $data['name'];
        return $service->save();
    }

    function get_service_count(){
        $data = Service::get()->count();
        return $data;
    }

}