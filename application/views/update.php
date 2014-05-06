<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>

<body>
<form id="form1" name="form1" method="post" action="/index.php/showall/update">
<?php foreach($data->result() as $row){ ?>
 <input type="hidden" name="brand" id="brand" value="<?php echo $row->repairId ?>" />
  <p>brand :
    <label for="brand"></label>
  <input type="text" name="brand" id="brand" value="<?php echo $row->brand ?>" />
  </p>
  <p>
    <label for="generation"></label>
    generation :
    <input type="text" name="generation" id="generation" value="<?php echo $row->generation ?>"/>
  </p>
  <p>detail : 
    <label for="detail"></label>
    <input type="text" name="detail" id="detail" value="<?php echo $row->detail ?>"/>
  </p>
  <p>receive : 
    <label for="receive"></label>
    <input type="text" name="receive" id="receive" value="<?php echo $row->receive ?>"/>
  </p>
<input type="submit" name="update" id="button" value="update" />
<?php } ?>
</form>
</body>
</html>