<?php
/**
* 
*/
class Exam extends CI_Controller
{
	
	 public function data()
	{
		//$this->load->view('signin');
		$array['name']=$this->input->get_post('name');
		$array['email']=$this->input->get_post('email');
		$url="http://localhost/exam/index.php/service/my";
		    $options = array(
    					'http' => array(
        					'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        					'method'  => 'POST',
        					'content' => http_build_query($array),
    						),
    					);
		        $context  = stream_context_create($options);
		        $result = file_get_contents($url,false, $context);
		        $json=json_decode($result,true);
		        print_r($json);
	}
}
?>