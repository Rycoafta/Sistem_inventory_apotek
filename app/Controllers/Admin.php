<?php

namespace App\Controllers;

class Admin extends BaseController
{
    
    public function __construct()
    {
        $this->session = session();
    }
    
    public function index()
    {
        //cek apakah ada session bernama isLogin
        if(!$this->session->has('isLogin')){
            return redirect()->to('/auth/login');
        }
        
        //cek role dari session
        if($this->session->get('role') != 1 || $this->session->get('role') != 2 || $this->session->get('role') != 3 || $this->session->get('role') != 4 || $this->session->get('role') != 5 || $this->session->get('role') != 6 || $this->session->get('role') != 7 || $this->session->get('role') != 8 || $this->session->get('role') != 9){
            return redirect()->to('/user');
        }
        
        return view('admin/index');
        
    }
    
}