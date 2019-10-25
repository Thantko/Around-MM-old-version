<?php
/**
 * Created by PhpStorm.
 * User: zwemunhtun
 * Date: 11/4/18
 * Time: 3:16 AM
 */

namespace App\ServiceModels;


use App\Models\User;

class UserModel
{

    function login($email, $password){
        $password = sha1($password);
        $result = User::where('email', $email)->where('password', $password)->first();

        if (!empty($result)) {
            return $result;
        }else{
            return null;
        }
    }

    function get_all_user(){
        $res = User::get()->toArray();
        return $res;
    }

    function create_user($data){
        $user = new User();
        $user->name = $data['user_name'];
        $user->email = $data['user_email'];
        $user->password = sha1($data['user_password']);
        return $user->save();
    }


    function edit_user($data){
        $user = User::where('id', $data['user_id'])->get()->first();
        $user->email = $data['email'];
        $user->password = sha1($data['password']);
        return $user->save();
    }

    function get_user_count(){
        $data = User::get()->count();
        return $data;
    }



}