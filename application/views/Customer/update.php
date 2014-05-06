<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>แก้ไขข้อมูลลูกค้า</title>
	
</head>
<body>





<?php echo form_open_multipart('crm/updateDataCus');?>


<table >
	<?php foreach($customer->result() as $row){?>
	<tr>
		<td>รหัสลูกค้า</td>
		<td><input type="text" name="customerID" value="<?php echo $row->customerID;?>" readonly></td>
	</tr>
	<tr>
		<td>ชื่อ</td>
		<td><input type="text" name="name" value="<?php echo $row->name;?>" ></td>
	</tr>
	<tr>
		<td>นามสกุล</td>
		<td><input type="text" name="lastName" value="<?php echo $row->lastName;?>"></td>
	</tr>
	<tr>
		<td>ที่อยู่</td>
		<td><input type="text" name="address" value="<?php echo $row->address;?>"></td>
	</tr>
	<tr>
		<td>จังหวัด</td>
		<td><select name="province" value="<?php echo $row->province;?>"> 
		<?php $con = mysql_connect("localhost","root",""); 
		mysql_select_db("crm",$con); 
		mysql_query("SET NAMES utf8"); 
		$sql = "SELECT * FROM province"; 
		$result = mysql_query($sql); while ($data = mysql_fetch_array($result) )
		{ echo "<option value=$data[province_title]>$data[province_title]</option>"; } ?> </select></td>
	</tr>
	<tr>
		<td>อำเภอ</td>
		<td><select name="amphur" value="<?php echo $row->amphur;?>"> 
		<?php $con = mysql_connect("localhost","root",""); 
		mysql_select_db("crm",$con); 
		mysql_query("SET NAMES utf8"); 
		$sql = "SELECT * FROM amphur WHERE province_id"; 
		$result = mysql_query($sql); while ($data = mysql_fetch_array($result) )
		{ echo "<option value=$data[amphur_title]>$data[amphur_title]</option>"; } ?> </select></td>
	</tr>
	<tr>
		<td>เบอร์โทร</td>
		<td><input type="text" name="telephone" value="<?php echo $row->telephone;?>"></td>
	<tr/>
	<tr>
		<td>อีเมล</td>
		<td><input type="text" name="email" value="<?php echo $row->email;?>"></td>
	</tr>
	<tr>
		<td ><input type="submit" value="ตกลง"></td>
		<td><input type="reset" value="ยกเลิก"></td>
	</tr>
	<?php };?>
<?php echo form_close();?>
</table>
	<?php echo anchor("crm/index/","กลับหน้าหลัก");?>
</body>
</html>