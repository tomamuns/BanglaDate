<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Refresh" content="300">
<title>Bangla Date v1.0</title>
</head>
<body>
<?php
include_once("./BanglaDate.php");
$bdate = new BanglaDate();

echo "".$bdate->PrintEngDate()."<br />";
echo "".$bdate->PrintBanglaDate()."<br />";
?>
</body>
</html>