<?php
class Activity extends CI_Model
{
	############### table Repair ###############
		var $repairId;
		var $custId;
		var $brand;
		var $generation;
		var $detail;
		var $import;
		var $receive;
		
	###### SET : repairId ######
	function setRepairId($repairId)
	{
		$this->repairId = $repairId;
	}

	###### GET : repairId ######
	function getRepairId()
	{
		return $this->repairId;
	}
		###### SET : custId  ######
	function setCustId($custId)
	{
		$this->custId = $custId;
	}

	###### GET : custId  ######
	function getCustId()
	{
		return $this->custId;
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
	function findByKeyword($repairId)
	{

		$this->db->where('repairId', $repairId);		
		$query = $this->db->get('repair');	
		return $query;

	}
	######################  SHOW  ###########################
	function showNew ()
	{		
			
			$query = $this->db->get('repair');
			return $query;
	}
	
	#####################  update  #############################

	function updateRepair()
		{
			$data = array(							
							'brand' => $this->brand,
							'generation' => $this->generation,
							'detail' => $this->detail,
							'receive' => $this->receive,
							
						);
			$this->db->update('repair', $data, 'repairId = "'. $this->repairId .'"');
			
		}
	}
?>