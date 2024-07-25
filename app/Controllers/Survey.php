<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\SurveyModel;

class Survey extends BaseController
{
    public $surveyModel;

	public function __construct()
    {
        $this->surveyModel = new SurveyModel();
    }
    // public function index($type)
    // {
    //     if (!in_array($type, ['internal', 'external'])) {
    //         throw new \CodeIgniter\Exceptions\PageNotFoundException("Page not found");
    //     }

    //         $this->session->set('servicetype', $type);

    //     $param = array(
    //         'is_active' => 1,
    //         'is_external' => $type === 'external' ? 1 : 0
    //     );

    //     $data['services'] = $this->surveyModel->get_services($param);
    //     $data['clienttype'] = $this->surveyModel->get_all_data('tblclienttype');


    //     return view('survey/survey-form',$data);
    // }


    public function external(){

        $param = array(
            'is_active' => 1,
            'is_external' => 1
        );

        $data['services'] = $this->surveyModel->get_services($param);
        $data['clienttype'] = $this->surveyModel->get_all_data('tblclienttype');
        $data['offices'] = $this->surveyModel->get_all_data('tbloffice');


        return view('survey/survey-form',$data);
    }


    public function internal(){

        $param = array(
            'is_active' => 1,
            'is_external' => 0
        );

        $data['services'] = $this->surveyModel->get_services($param);
        $data['clienttype'] = $this->surveyModel->get_all_data('tblclienttype');


        return view('survey/survey-form',$data);
    }

    public function save(){
        $quarterid = $this->surveyModel->get_active_quarter()['quarterid'];

        $form1data = $this->request->getPost('form1');
        $form2data = $this->request->getPost('form2');
        $form3data = $this->request->getPost('form3');


        //START PROCESS FORM1
        $form1_data_transformed = array();
		$vul_sectorArr = array();
		$dost_infoArr = array();

		foreach ($form1data AS $key => $value) {
			$form1_data_transformed[$value['name']] = $value['value'];

			if ($value['name'] == 'vul_sector') {
				array_push($vul_sectorArr,$value['value']);
			}

            if ($value['name'] == 'dost_info') {
				array_push($dost_infoArr,$value['value']);
			}
		}

		unset($form1data['vul_sector']);
		$form1_data_transformed['vul_sector'] = implode(", ",$vul_sectorArr);
		unset($form1data['dost_info']);
		$form1_data_transformed['dost_info'] = implode(", ",$dost_infoArr);
        

        $form1_data_transformed['quarterid'] = $quarterid;
        $form1_data_transformed['year'] = date('Y');

        if (isset($_SESSION['officeid'])) {
            $form1_data_transformed['officeid'] = $_SESSION['officeid'];
        }

        $summaryid = $this->surveyModel->insert_data('tblcss_summary',$form1_data_transformed);

        // START PROCESS FORM2
        foreach ($form2data AS $key => $value) {
			$form2_data_transformed[$value['name']] = $value['value'];
		}

        $form2_data_transformed['csssummaryid'] = $summaryid;
        $save = $this->surveyModel->insert_data('tblcss_details_cc',$form2_data_transformed);

        // START PROCESS FORM3
        foreach ($form3data AS $key => $value) {
            $form3_data_transformed[$value['name']] = $value['value'];
        }

        $form3_data_transformed['csssummaryid'] = $summaryid;
        $save = $this->surveyModel->insert_data('tblcss_details_sqd',$form3_data_transformed);

        if ($save > 0) {
            echo "SUCCESS";
        }
    }

    public function thank_you(){
        return view('survey/thank-you');
    }
}