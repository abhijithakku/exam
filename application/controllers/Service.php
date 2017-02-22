<?php
/**
* 
*/
class Service extends CI_Controller
{
	
	public function my() 
	{
		if(!empty($_REQUEST["name"])&& !empty($_REQUEST["email"])){

			$data["name"]=$this->input->get_post("name");
			$data["email"]=$this->input->get_post("email");
				if(!preg_match('(/^[^\s@]+@[^\s@]+\.[^\s@]+$/)',$data["email"])){
				    $msg=array("ResponceCode"=>"200","msg"=>"insert");	
				}else{
					$msg=array("ResponceCode"=>"200","msg"=>" not insert");
				}
		            
				
		}else{
			$msg=array("ResponceCode"=>"404","msg"=>"allfield require");
		}		
		echo json_encode($msg);
				
	}

}
?>