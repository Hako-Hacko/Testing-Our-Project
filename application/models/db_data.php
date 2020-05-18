<?php

class db_data extends CI_Model {
/***************************************** Start selectFromDb page *****************************************/ 
    public function selectFromDb() 
    {
        $query = $this->db->get('users');                   //select data (SELECT * FROM users)
        if($query) {
            return $query->result();                                // retouner les données sous form array
        } else {
            return false;
        }

    }
/***************************************** End selectFromDb page *****************************************/ 

/***************************************** Start select page *****************************************/ 
    public function select($tabel, $where = '', $orderBy = '', $limit = '') 
    {
        if($limit) {
            foreach($limit as $limitkey => $limitval) {
                $this->db->limit($limitval, $limitkey);                                  // LIMIT 
            }
        }

        if($orderBy) {
            foreach($orderBy as $ORkey => $ORval) {
                $this->db->order_by($ORkey, $ORval);                                  // ORDER BY .... and ....
            }
        }

        //$this->db->where('username', 'mostafa');                  // WHERE username = 'mostafa';
        if($where) {
            foreach($where as $key => $val) {
                $this->db->where($key, $val);                                  // WHERE id = 2;
            }
        }
        
        $query = $this->db->get($tabel);                            //select data (SELECT * FROM test)
        if($query) {
            return $query->result();                                // retouner les données sous form array
        } else {
            return false;
        }

    }
/***************************************** End select page *****************************************/ 

}

?>
