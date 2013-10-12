<!DOCTYPE html 
     PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
 
<head> 
  <title>Preselect Data Seleksi</title> 
</head> 
 
<body> 
 
  <form action="<?php $_SERVER['PHP_SELF'];?>" method="post"> 
    FAKULTAS : 
    <select name="th"> 
      <option value="FMIPA">FMIPA
      <option value="FT">FT 
      <option value="FIS"selected="
      <?PHP
	  if ($_post['th']=="FMIPA"){
		  echo 'selected="selected"';}
      ?>">FIS
      <option value="FIP">FIP
      <option value="SASTRA">FS 
      
    </select> <br /> 
 
    <input type="submit" value="OK" /> 
  </form> 
 
<?php 
if (isset($_POST['th'])) { 
  echo $_POST['th']; 
} 
?> 
</body>
</html>