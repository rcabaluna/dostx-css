<?php

namespace App\Controllers;

use App\Models\AdminModel;

class Admin extends BaseController
{
    public $adminModel;

	public function __construct()
    {
        $this->adminModel = new AdminModel();
    }

    public function dashboard(){
        return view('admin/dashboard');
    }

    public function quarters(){
        $data['quarters'] = $this->adminModel->get_quarters();

        return view('admin/quarters',$data);
    }

    public function activate_quarter(){

        $uri = service('uri');
        $quarterid = $uri->getSegment(3);

        $update = $this->adminModel->update_quarter_status($quarterid);

        $this->session->setFlashdata('update',true);
        
        return redirect()->to(base_url('admin/registry/quarters'));
    }

}
