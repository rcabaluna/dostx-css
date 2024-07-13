<?php

namespace App\Controllers;

use App\Models\HomeModel;

class Reports extends BaseController
{

    private $reportsModel;

	public function __construct()
	{
        $this->reportsModel = new HomeModel();
	}

    public function responses(){
        return view('reports/responses-view');
    }

}