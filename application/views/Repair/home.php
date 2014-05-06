<!DOCTYPE HTML>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <title>ข้อมูลการซ่อม</title>
      <link href="css/style.css" rel="stylesheet" type="text/css" />
<title></title>
</head>

<body>



<?php echo form_open_multipart('crm/searchKeywordRepair');?>
<table>
	<tr>
		<td>ค้นหาจากรหัสการซ่อม :<td>
		<td><input type="text" name="keyword"><td>
		<td><input type="submit" name="search" value="ค้นหา"><td>
	</tr>
</table>
<?php echo form_close();?>

<table border="5" align="center">
	<tr align="center">
		<td>รหัสการซ่อม</td>
		<td>รหัสลูกค้า</td>
		<td>ยี่ห้อสินค้า</td>
		<td>รุ่นของสินค้า</td>
		<td>รายละเอียดการซ่อม</td>
		<td>วันที่ลูกค้าส่งซ่อม</td>
		<td>วันที่ได้รับสินค้า</td>
		<td>แก้ไข</td>
	</tr>


	<tr><?php
			if($repair->num_rows <= 0)
			{
				echo"<tr><td colspan='8' align='center'>--no data--</td></tr>";
			}
			else
			{
						foreach($repair->result() as $row)
						{	
							echo"<tr>";
							echo"<td>".$row->repairID."</td>";
							echo"<td>".$row->customerID."</td>";
							echo"<td>".$row->brand."</td>";
							echo"<td>".$row->generation."</td>";
							echo"<td>".$row->detail."</td>";
							echo"<td>".$row->import."</td>";
							echo"<td>".$row->receive."</td>";
							echo"<td>".anchor("crm/updateShowRepair/".$row->repairID,"แก้ไข",array("onclick"=>"javascript:return confirm('คุณต้องการแก้ไขหรือไม่ !!!!');"))."</td>";
							echo"<br>";
						}
			}
		?></tr>
</table>


</body>
</html>
