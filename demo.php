<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title> Recursive PHP Array  </title>	
	<link  href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
require_once('function.php');
require_once('resource.php');
// @@ wrap the menu element with Ul and class 'nagivate'
if (!empty($aMenu)):
		print $aMenu = wrapElement(array(
				'element' => 'ul',
				'class'		 => 'navigate',
				'content' => drawMenu($aMenu)
		));
endif
?>
</body>
</html>
