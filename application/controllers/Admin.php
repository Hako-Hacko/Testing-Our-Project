<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {	

/***************************************** Start default page *****************************************/	
	public function index()
	{

		echo "<h2>admin hako page</h2>" . '<br>';
		$this->load->view('');
	}
/***************************************** End default page *****************************************/

/***************************************** Start login page *****************************************/
	public function login()
	{
		$this->load->helper('form');
		$this->load->view('admin/login');
	}
/**************************************** End login page *****************************************/

/***************************************** Start page test *****************************************/
	public function test()
	{
		$this->load->model('db_data');                        // loading model
        $data = $this->db_data->selectFromDb(); 			  // loading function exist in model
        
        
        
        foreach($data as $key) { 							// foreach to extraire data from table in ddb
			$id = $key->id; 					            // id from database
			$key = $key->key_track; 					    // key_track from database
		    echo $id . " ------------  " . $key . "<br>";    
        }
        
        $valeur = 11;
        $array = array(
			'id' 		=> $valeur,
			//'key_track' => 'Nacer'						      // WHERE key_track = 'Nacer' AND id = 6;
		);
        
        $dat = $this->db_data->select('users', $array); 	// loading function exist in model // null to ignore 
        if ($dat) {
            foreach($dat as $key) { 							// foreach to extraire data from admin table in ddb
                echo "<br>key_track is : <strong>" . $key->key_track . "</strong><br> and id is : <strong>" . $key->id . "</strong><br><br>"; 
            }
        } else {
            echo "id = " . $valeurs . " Not found";
        }
	}
/***************************************** End page test *****************************************/

}
