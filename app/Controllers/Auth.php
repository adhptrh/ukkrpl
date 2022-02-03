<?php

namespace App\Controllers;
use App\Models\User;
use Config\Services;

class Auth extends BaseController
{
    public function login()
    {
        if (User::authenticate($this->request->getVar('nik'), $this->request->getVar('nama')))
        {
            Services::session()->set("nik", $this->request->getVar('nik'));
            return redirect()->to(base_url('/'));
        } else {
            Services::session()->setFlashdata("failed", "Login Failed");
            return redirect()->to(base_url('/login'));
        }
    }

    public function register() {
        $cond = User::create(
            $this->request->getVar("nik"), 
            $this->request->getVar("nama")
        );
        
        if ($cond >= 0) {
            Services::session()->setFlashdata("success", "Account created, you can now login");
            return redirect()->to(base_url('/login'));
        } elseif ($cond == -1) {
            Services::session()->setFlashdata("failed", "NIK Sudah dipakai");
            return redirect()->to(base_url('/register'));
        }

    }

    public function logout()
    {
        Services::session()->destroy();
        return redirect()->to(base_url("/"));
    }
}