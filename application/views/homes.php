<!DOCTYPE HTML>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <title>SlideShow</title>
      <link href="css/style.css" rel="stylesheet" type="text/css" />
<title></title>
</head>

<body>

<form method="post" action="/index.php/showall/search">ค้นหารหัสการซ่อม: <input type="text" name="repairId"><input type="submit" name="search" value="ค้นหาหนังสือ"></form>
<hr />ข้อมูลการซ่อม<hr />
<table border=1>
	<tr>
		<<td>รหัสการซ่อม</td>
		<td>รหัสลูกค้า</td>
		<td>ยี่ห้อสินค้า</td>
		<td>รุ่นของสินค้า</td>
		<td>รายละเอียดการซ่อม</td>
		<td>วันที่ลูกค้าส่งซ่อม</td>
		<td>วันที่ได้รับสินค้า</td>
		<td>แก้ไขสินค้า</td>
	</tr>
	<tr>
		<td><?php foreach($data -> result() as $row){echo $row -> repairId .'</br>';}?></td>
		<td><?php foreach($data -> result() as $row){echo $row -> custId .'</br>';}?></td>
		<td><?php foreach($data -> result() as $row){echo $row -> brand .'</br>';}?></td>
		<td><?php foreach($data -> result() as $row){echo $row -> generation .'</br>';}?></td>
		<td><?php foreach($data -> result() as $row){echo $row -> detail .'</br>';}?></td>
		<td><?php foreach($data -> result() as $row){echo $row -> import .'</br>';}?></td>
		<td><?php foreach($data -> result() as $row){echo $row -> receive .'</br>';}?></td>
		<td><?php foreach($data -> result() as $row){ echo '<a href="/index.php/showall/editshow/'.$row->repairId.'">แก้ไข</a><br>'; }?></td>
	
	</td></tr>
	
</table>
<!-- (รหัสหนังสือ)ISBN - ชื่อหนังสือ : ผู้แต่ง [ลบ] -->
<!--[<a href="/index.php/showall/search/'. $row->repairId .'">ลบ</a>]<br />-->
</body>
</html>
