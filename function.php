<?php

/**
 *  helper function to wrap array 'content' with selected 'element'.
 *
 * @param 	array $elemntArray ; Pass :'element'( element type ) , class, content, url, openTag ( to not close tag ), string ( direct close element )
 * @return 	wrapped content with selected html 'element'
 *
 */

function wrapElement($elemntArray)
	{
		
		// if string close tag and return	
		
		if (is_string($elemntArray)) return $element = '</' . $elemntArray . '>';
		
		$elementContent = $elemntArray['content'];
		(isset($elemntArray['class']) ? $elementClass = 'class="' . $elemntArray['class'] . '"' : $elementClass = null);
		
		// if the element array value is list 'element' else ul
		
		if ($elemntArray['element'] == 'li')
			{
				$cloesTage = '</li>';
				if (isset($elemntArray['openTag']))
					{
						$cloesTage = '';
					}

				if (!empty($elemntArray['url'])) $elementContent = '<a hef="' . $elemntArray['url'] . '">' . $elementContent . '</a>';
				$element = '<li ' . $elementClass . '>' . $elementContent . $cloesTage;
			}
		else
			{
				$cloesTage = '</ul>';
				$element = '<ul ' . $elementClass . '>' . $elementContent . $cloesTage;
			}

		return $element;
	} //@ end function

/**
 *  recursive iterate and create map thought multidimensional menu array
 *
 * @param 	array $array;  Pass multidimensional array for menu;  name and/or url
 * @return  array of processed elements via  wrapElement()
 *
 */

function drawMenu($array, $level = 0)
	{
		$menu = "";
		foreach($array as $key => $value)
			{
				$addClass = '';
				
				// check the level to decide the main items for class 'ismain'
				
				if ($level == 0) $addClass = ' ismain';
				
				(!empty($value['url']) ? $url = $value['url'] : $url = NULL);
				
				// inside the loop items that has no subs
				
				if (!isset($value['subpages']))
					{
						$class = 'inside';
						$menu.= wrapElement(array(
								'element' => 'li',
								'class' 	=> $class . $addClass,
								'content' => $value['name'],
								'url' 		=> $url
						));
					}
				else
					{
						// outside the loop items that do has subs
						
						$class = 'outside';
						$menu.= wrapElement(array(
								'element' => 'li',
								'class' 	=> $class . $addClass,
								'content' => $value['name'],
								'url' 		=> $value['url'],
								'openTag' => TRUE
						));
						
						$menuItemContent = drawMenu($value['subpages'], $level + 1);
						$menu.= wrapElement(array(
								'element' => 'ul',
								'content' => $menuItemContent
						));
						$menu.= wrapElement('li');
					}
			}

		return $menu;
	} //@ end function


//@ end PHP coding
?>
