<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>ข้อมูลลูกค้า</title>
	
</head>
<body>

<?php echo form_open_multipart('crm/searchKeywordCus');?>
<table>
	<tr>
		<td>ค้นหาจากชื่อ :<td>
		<td><input type="text" name="keyword"><td>
		<td><input type="submit" name="search" value="ค้นหา"><td>
	</tr>
</table>
<?php echo form_close();?>



<table border="5" align="center">
	<tr align="center">
		<td> รหัสลูกค้า </td>
		<td> ชื่อ  </td>
		<td> นามสกุล  </td>
		<td> ที่อยู่ </td>
		<td> จังหวัด </td>
		<td> เบอร์โทร </td>
		<td> อีเมล </td>
		<td> แก้ไข </td>
	</tr>


	<tr><?php
			if($customer->num_rows <= 0)
			{
				echo"<tr><td colspan='8' align='center'>--no data--</td></tr>";
			}
			else
			{
						foreach($customer->result() as $row)
						{	
							echo"<tr>";
							echo"<td>".$row->customerID."</td>";
							echo"<td>".$row->name."</td>";
							echo"<td>".$row->lastName."</td>";
							echo"<td>".$row->address."</td>";
							echo"<td>".$row->province."</td>";
							echo"<td>".$row->telephone."</td>";
							echo"<td>".$row->email."</td>";
							echo"<td>".anchor("crm/updateShowCus/".$row->customerID,"แก้ไข",array("onclick"=>"javascript:return confirm('คุณต้องการแก้ไขหรือไม่!!!!');"))."</td>";
							echo"<br>";
						}
			}
	?></tr>
</table>


</body>
</html>