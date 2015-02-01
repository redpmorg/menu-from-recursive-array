<?php

/**
 *  resource menu data multidimensional array
 * @param 	array name; menu item title, and/or url
 *
 */
$aMenu = array(
	array("name" => "Page 1", "url" => "http://www.sitedirect.se", 
		"subpages" => array(
		  array("name" => "Subpage 1.1", "url" => ""),
		  array("name" => "Subpage 1.2", "url" => "http://www.google.se"),
		  array("name" => "Subpage 1.3", "url" => ""),
		) 				
	), 			
	array("name" => "Page 2", "url" => ""),
	array("name" => "Page 3", "url" => "",
		"subpages" => array(
			array("name" => "Subpage 3.1", "url" => ""),
			array("name" => "Subpage 3.2", "url" => ""),
			array("name" => "Subpage 3.3", "url" => "",
				"subpages" => array(
					array("name" => "Subpage 3.3.1", "url" => ""),
					array("name" => "Subpage 3.3.2", "url" => ""),
					array("name" => "Subpage 3.3.3", "url" => ""),
				),
			),
		), 								
	),
	array("name" => "Page 4", "url" => ""),
	array("name" => "Page 5", "url" => ""),
);

?>
