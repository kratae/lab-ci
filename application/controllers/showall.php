<?php
class Showall extends CI_Controller {

	public function index()
	{
		$this->load->database();
		$this->load->model('Activity');
		$data["data"]=$this->Activity->showNew ();
		$this->load->view('home',$data);
		
	}
	function search()
	{
	
		$this->load->database();
		$this->load->model('Activity');
	
		$repairId = $this->input->post('repairId');
		
		$data['data'] = $this->Activity->findByKeyword($repairId);
		$this->load->view('homes', $data);		
	}

	function editshow($repairId){
		$this->load->database();
		$this->load->model("Activity");

		//$customerID    =   $this->input->post('customerID');
		$data['data'] = $this->Activity->findByKeyword($repairId);
        //echo $customerID;
		//die();

		$this->load->view('update',$data);
	}
	
	
	function update(){
		$this->load->database();
		$this->load->model("Activity");
		$a = $this->input->post('repairId');
		$this->Activity->setBrand($this->input->post('brand'));
		$this->Activity->setGeneration($this->input->post('generation'));
		$this->Activity->setDetail($this->input->post('detail'));
		$this->Activity->setReceive($this->input->post('receive'));

		$this->Activity->updateRepair($a);
		$this->load->view('home');

	}
	
}

?>