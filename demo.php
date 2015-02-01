
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
