
<?php

/*
repairID รหัสการซ่อม
customerID รหัสลูกค้า
brand ยี่ห้อ
generation รุ่น
detail รายละเอียด
import เวลานำเข้ามาซ่อม
receive เวลาซ่อมเสร็จ
*/


class RepairModel extends CI_Model
{
	############### table Repair ###############
		var $repairID;
		var $customerID;
		var $brand;
		var $generation;
		var $detail;
		var $import;
		var $receive;
		
	###### SET : repairId ######
	function setRepairID($repairID)
	{
		$this->repairID = $repairID;
	}

	###### GET : repairId ######
	function getRepairID()
	{
		return $this->repairID;
	}
	###### SET : customerID  ######
	function setCustomerID($customerID)
	{
		$this->customerID = $customerID;
	}

	###### GET : customerID  ######
	function getCustomerID()
	{
		return $this->customerID;
	}
	###### SET : brand  ######
	function setBrand($brand)
	{
		$this->brand = $brand;
	}

	###### GET : brand ######
	function getBrand()
	{
		return $this->brand;
	}
	###### SET : generation  ######
	function setGeneration($generation)
	{
		$this->generation = $generation;
	}

	###### GET : generation  ######
	function getGeneration()
	{
		return $this->generation;
	}
		###### SET : detail ######
	function setDetail($detail)
	{
		$this->detail = $detail;
	}

	###### GET : detail ######
	function getDetail()
	{
		return $this->detail;
	}
		###### SET : import ######
	function setImport($import)
	{
		$this->import = $import;
	}

	###### GET : import ######
	function getImport()
	{
		return $this->import;
	}
		###### SET : receive ######
	function setReceive($receive)
	{
		$this->receive = $receive;
	}

	###### GET : receive ######
	function getReceive()
	{
		return $this->receive;
	}
	


	############ search #############
	function search($keyword)
	{

		$this->db->like('repairID',$keyword);//ค้นหาผ่าน รหัสการซ่อม
		$query  =  $this->db->get('repair');
		return	$query;

	}

	######################  SHOW  ###########################
	function showNew ()
	{		
		$query = $this->db->get('repair');
		return $query;

	}

	
	function searchForUpdate($repairID)
	{

		$this->db->like('repairID',$repairID);
		$query  =  $this->db->get('repair');
		return	$query;

	}
	
	#####################  update  #############################
	function updateRepair()
		{

			$data = array(							
							'brand' => $this->brand,
							'generation' => $this->generation,//ให้ตัวแปร data เท่ากับ array คือให้ข้อมูลทั้งหมดแสดงออกมาแบบ array
							'detail' => $this->detail,
							'receive' => $this->receive,
							
						);
			$this->db->update('repair', $data, 'repairID = "'. $this->repairID .'"');//อับเดสข้อมูลที่เป็นarrayที่อยู่ในตัวแปร data
		}
	}
?>