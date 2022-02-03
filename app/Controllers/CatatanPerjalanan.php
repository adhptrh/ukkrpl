<?php

namespace App\Controllers;

use App\Models\User;
use Config\Services;

class CatatanPerjalanan extends BaseController
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

        $userdata = User::findByNIK(Services::session()->get("nik"));
        return view("catatan_perjalanan", ["userdata"=>$userdata]);
    }
}