<?php

namespace App\Controllers;

use App\Models\User_model;
use Config\Services;

class IsiData extends BaseController
{
    function __construct()
    {
        Services::session();
    }

    public function index()
    {
        if (!Services::session()->get("nik")) {
            return redirect()->to(base_url('/login'));
        }

        $userdata = User_model::findByNIK(Services::session()->get("nik"));
        return view("isidata", ["userdata"=>$userdata]);
    }
}