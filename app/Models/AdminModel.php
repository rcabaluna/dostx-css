<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{

    public function get_all_data($tablename){

        $builder = $this->db->table($tablename);
        $query   = $builder->get();

        return $query->getResultArray();
    }

    public function update_status($tablename,$param){
        
        $builder = $this->db->table($tablename);
        $builder->set('is_closed', $param['is_closed']);
        $builder->where('shorthand', $param['shorthand']);

        $builder->update();
    }

    public function get_event_data($tablename,$param){

        $builder = $this->db->table($tablename);
        $builder->where($param);
        $query   = $builder->get();

        return $query->getRowArray();
    }

    public function get_quarters()
    {
        $builder = $this->db->table('tblquarters');
        $query = $builder->select('tblquarters.*, tblsemester.*')
                        ->join('tblsemester', 'tblquarters.semesterid = tblsemester.semesterid')->get();

        return $query->getResultArray();
    }

    public function update_quarter_status($quarterid){
        $builder = $this->db->table('tblquarters');
        $builder->set('is_active', 0); // set all is_active to 0
        $builder->update();
    
        $builder = $this->db->table('tblquarters');
        $builder->set('is_active', 1);
        $builder->where('quarterid', $quarterid);
        $builder->update();

    }
}