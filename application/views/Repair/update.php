<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>แก้ไขข้อมูลการส่งซ่อม</title>
</head>

<body>
<?php echo form_open_multipart('crm/updateDataRepair');?>



<table>
<?php foreach($repair->result() as $row){?>
	<tr>
		<td>รหัสการซ่อม</td>
		<td><input type="text" name="repairID" value="<?php echo $row->repairID;?>" readonly ></td>
	</tr>
	<tr>
		<td>รหัสลูกค้า</td>
		<td><input type="text" name="customerID" value="<?php echo $row->customerID;?>" readonly ></td>
	<tr/>
	<tr>
		<td>ยี่ห้อสินค้า</td>
		<td><input type="text" name="brand" value="<?php echo $row->brand;?>" ></td>
	<tr/>
	<tr>
		<td>รุ่นของสินค้า</td>
		<td><input type="text" name="generation" value="<?php echo $row->generation;?>" ></td>
	</tr>
	<tr>
		<td>รายละเอียดการซ่อม</td>
		<td><input  type="text" name="detail" value="<?php echo $row->detail;?>" size="50"></textarea></td>
	</tr>
	<tr>
		<td>วันที่ส่งซ่อม</td>
		<td><input type="text" name="import" value="<?php echo $row->import;?>" readonly ></td>
	</tr>
	<tr>
		<td>วันที่รับสินค้า</td>
		<td><input type="text" name="receive" value="<?php echo $row->receive;?>" ></td>
	</tr>
	<tr>
		<td ><input type="submit" value="ตกลง"></td>
		<td><input type="reset" value="ยกเลิก"></td>
	</tr>
	<?php };?>
  </table>
<?php echo form_close();?>

</body>
</html>