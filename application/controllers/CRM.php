<?php

class crm extends CI_Controller {

	public function __construct(){
		
		parent::__construct();
		
		$this->load->helper(array('form', 'url'));
		
		}
	
	########## แสดงหน้าหลัก  ##########
	function index(){
		$this->load->view('home');
	}

	########## แสดงหน้าข้อมูลลูกค้า ##########
	function showCus(){
		$this->load->database();
		$this->load->model("CusModel");

		$data['customer'] = $this->CusModel->getDetailCus();
	
		$this->load->view('/customer/home', $data);
	}

	########## แสดงหน้าข้อมูลการส่งซ่อม  ##########
	function showRepair(){

		$this->load->database();
		$this->load->model('RepairModel');


		$data["repair"]=$this->RepairModel->showNew();
		$this->load->view('/repair/home',$data);
	}

	########## แสดงหน้าข้อมูลการส่งซ่อม  ##########
	function showContact(){

		//$this->load->database();
		//$this->load->model('ContactModel');


		//$data["repair"]=$this->RepairModel->showNew();
		$this->load->view('/contact/home');
	}
	
	########## ดึงข้อมูลมาแสดงเพื่อที่จะแก้ไข เป็นข้อมูลลูกค้า  ##########
	function updateShowCus($customerID){
		$this->load->database();
		$this->load->model("CusModel");

		$data['customer'] = $this->CusModel->searchForUpdate($customerID);

		$this->load->view('/customer/update',$data);
	}

	########## ดึงข้อมูลมาแสดงเพื่อที่จะแก้ไข เป็นข้อมูลการส่งซ่อม   ##########
	function updateShowRepair($repairID){
		$this->load->database();
		$this->load->model("RepairModel");

		$data['repair'] = $this->RepairModel->searchForUpdate($repairID);

		$this->load->view('/repair/update',$data);
	}

	########## บันทึกข้อมูลการแก้ไข ของลูกค้า  ##########
	function updateDataCus(){
		$this->load->database();
		$this->load->model("CusModel");

		$this->CusModel->setCustomerID($this->input->post('customerID'));
		$this->CusModel->setName($this->input->post('name'));
		$this->CusModel->setLastName($this->input->post('lastName'));
		$this->CusModel->setAddress($this->input->post('address'));
		$this->CusModel->setProvince($this->input->post('province'));
		$this->CusModel->setTelephone($this->input->post('telephone'));
		$this->CusModel->setEmail($this->input->post('email'));
		
		
		//$keyword    =   $this->input->post('customerID');
		//echo $keyword;
		//die();

		$this->CusModel->updateDatas();
		
	}

	########## บันทึกข้อมูลการแก้ไข ของการส่งซ่อม  ##########
	function updateDataRepair(){

		$this->load->database();
		$this->load->model("RepairModel");
		
		$this->RepairModel->setRepairID($this->input->post('repairID'));
		$this->RepairModel->setCustomerID($this->input->post('customerID'));
		$this->RepairModel->setBrand($this->input->post('brand'));
		$this->RepairModel->setGeneration($this->input->post('generation'));
		$this->RepairModel->setDetail($this->input->post('detail'));
		$this->RepairModel->setImport($this->input->post('import'));
		$this->RepairModel->setReceive($this->input->post('receive'));

		$this->RepairModel->updateRepair();
		
	}

	########## ค้นหาข้อมูลลูกค้า  ##########
	function searchKeywordCus()
    { 
		$this->load->database();
		$this->load->model("CusModel");
		
		$keyword    =   $this->input->post('keyword');

		//echo $keyword;
		//die();

        $data['customer'] = $this->CusModel->search($keyword);
        $this->load->view('/customer/home',$data);
    }

	########## ค้นหาข้อมูลลูกค้า  ##########
	function searchKeywordRepair()
    { 
		$this->load->database();
		$this->load->model("RepairModel");
		
		$keyword    =   $this->input->post('keyword');

        $data['repair'] = $this->RepairModel->search($keyword);
        $this->load->view('/repair/home',$data);
    }

}
?>