<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Preselect Data Checkedbox</title>
</head>

<body>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" >
  <p>Agama: </p>
  <p>
    <input type="checkbox" name="Agama[]" value="Islam" checked="checked"/> Islam
    <input type="checkbox" name="Agama[]" value="Kristen" checked="checked"/> Kristen
    <input type="checkbox" name="Agama[]" value="Hindu" checked="checked"/> Hindu
	<input type="checkbox" name="Agama[]" value="Budha" checked="checked"/> Budha
    <input type="submit" value="OK" />
  </p>
</form>

<?php
if (isset($_POST['Agama'])){
	foreach ($_POST['Agama'] as $key => $val) {
		echo   ' + ' .$val . '<br />';
	}
}

?>
</body>
</html>