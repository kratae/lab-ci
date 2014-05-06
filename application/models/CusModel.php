<?php 
	class CusModel extends CI_Model {
		
			var $ID; //ID
			var $customerID; //รหัสลูกค้า
			var $name; //ชื่อลูกค้า
			var $lastName; //นามสกุลลูกค้า
			var $address; //ที่อยู่ลูกค้า
			var $telephone; //เบอร์โทรศัพท์
			var $email; //อีเมล
			


			var $province; //จังหวัด

			function __construct()
				{
					parent::__construct();
				}

			###### SET : ID (ID) ######
				function setID($ID)
				{
					$this->ID = $ID;
				}

			###### GET : ID (ID) ######
				function getID()
				{
					return $this->ID;
				}


			###### SET : customerID (รหัสลูกค้า) ######
				function setCustomerID($customerID)
				{
					$this->customerID = $customerID;
				}

			###### GET : customerID (รหัสลูกค้า) ######
				function getCustomerID()
				{
					return $this->customerID;
				}

			###### SET : name (ชื่อลูกค้า) ######
				function setName($name)
				{
					$this->name = $name;
				}

			###### GET : name (ชื่อลูกค้า) ######
				function getName()
				{
					return $this->name;
				}

			###### SET : lastName (นามสกุลลูกค้า) ######
				function setLastName($lastName)
				{
					$this->lastName = $lastName;
				}
		
			###### GET : lastName (นามสกุลลูกค้า) ######
				function getLastName()
				{
					return $this->lastName;
				}

			###### SET : address (ที่อยู่ลูกค้า) ######
				function setAddress($address)
				{
					$this->address = $address;
				}

			###### GET : address (ที่อยู่ลูกค้า) ######
				function getAddress()
				{
					return $this->address;
				}

			###### SET : telephone (เบอร์โทรศัพท์) ######
				function setTelephone($telephone)
				{
					$this->telephone = $telephone;
				}

			###### GET : telephone (เบอร์โทรศัพท์) ######
				function getTelephone()
				{
					return $this->telephone;
				}

			###### SET : email (อีเมล) ######
				function setEmail($email)
				{
					$this->email = $email;
				}

			###### GET : email (อีเมล) ######
				function getEmail()
				{
					return $this->email;
				}







			###### SET : province (จังหวัด) ######
				function setProvince($province)
				{
					$this->province = $province;
				}

			###### GET : province (จังหวัด) ######
				function getProvince()
				{
					return $this->province;
				}





		########## ดึงข้อมูลลูกค้า  ##########
		function getDetailCus()
		{

			/*$this->db->select('customerID,name,lastName,address,province,telephone,email');*/
			$query = $this->db->get('customer');
			return $query;
	
		}

		########## ค้นหาข้อมูลลูกค้า จาก ชื่อ ลูกค้า  ##########
		function search($keyword)
		{

			$this->db->like('name',$keyword);
			$query  =  $this->db->get('customer');
			return	$query;

		}
	
		########## ค้นหาข้อมูลลูกค้า จากรหัสลูกค้า เพื่อ ดึงไปใช้ในการแก้ไข  ##########
		function searchForUpdate($customerID)
		{

			$this->db->like('customerID',$customerID);
			$query  =  $this->db->get('customer');
			return	$query;

		}

		########## แก้ไขข้อมูลลูกค้า ##########
		function updateDatas()
		{

			$data = array(							
							'name' => $this->name,
							'lastname' => $this->lastName,
							'address' => $this->address,
							'province' => $this->province,
							'telephone' => $this->telephone,
							'email' => $this->email
						);
			
			//echo $this->customerID;
			//die();

			/**$this->db->where('customerID', $customerID);
			$this->db->update('customer', $data);**/

			$this->db->update('customer', $data, 'customerID = "'. $this->customerID .'"');
			
		}
	}
?>