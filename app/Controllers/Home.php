<?php

namespace App\Controllers;

use App\Models\HomeModel;

class Home extends BaseController
{

    private $homeModel;

	public function __construct()
	{
        $this->homeModel = new HomeModel();
	}

    public function index(){
        return redirect()->to(base_url('login'));
    }

    public function login()
    {
        
        if ($_POST) {

            $pass = $this->request->getPost('password');
            $check = $this->homeModel->get_data('tblusers',array('username' => $this->request->getPost('username')));

            if (!$check) {
                $data['invalid'] = true;
            }else{
                if (password_verify($pass,$check['password'])) {
                    $userdata = [
                        'userid'  => $check['userid'],
                        'username' => $check['username'],
                        'office' => $check['name'],
                        'officeid' => $check['officeid'],

                        'logged_in' => true,
                        'usertype' => $check['usertype']

                    ];
                        $this->session->set($userdata);

                    if ($check['usertype'] == 'admin') {
                        return redirect()->to(base_url('admin/dashboard')); 
                    }else{
                        // return redirect()->to(base_url('user-links?event='.$check['eventaccess'])); 
                    }
                }else{
                    $data['invalid'] = true;
                }
            }
        }

        return view('login');
    }

    public function logout(){
        $this->session->destroy();
        return redirect()->to(base_url('login')); 

    }
}