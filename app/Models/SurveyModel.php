<?php

namespace App\Models;

use CodeIgniter\Model;

class SurveyModel extends Model
{

    public function insert_data($tablename,$data){
		
        $builder = $this->db->table($tablename);
        $builder->insert($data);

        return $this->db->insertID();
    }

    public function get_services($param){
        $builder = $this->db->table('tblservices');
        $builder->where($param);
        $builder->orderBy("CASE WHEN name = 'Others' THEN 1 ELSE 0 END", 'ASC');
        $builder->orderBy('unit', 'ASC');
        $builder->orderBy('name', 'ASC');
    
        $query   = $builder->get();
    
        return $query->getResultArray();
    }

    public function get_all_data($tablename){
        $builder = $this->db->table($tablename);
        $query   = $builder->get();

        return $query->getResultArray();
    }

    public function get_active_quarter(){
        $builder = $this->db->table('tblquarters');
        $builder->where('is_active',1);
        $query   = $builder->get();
    
        return $query->getRowArray();
    }

}