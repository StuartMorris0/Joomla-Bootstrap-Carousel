<?php

#@license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL

defined('_JEXEC') or die;

class mod_mpbase_bootcarouselHelper{
	
	public function getImages(&$params){
		
		$imgsAndCaps = array(); 
		
		$i = 1;
		
		while($i < 11): // Total 10 images
		
		$menuvalue = $params->get("image".$i."link");
		
		$database = JFactory::getDBO();
		$sql = "SELECT link FROM #__menu WHERE id = ".$menuvalue;
		$database->setQuery( $sql );
		$menuItem=$database->loadResult();
		
		$link = JRoute::_($menuItem.'&Itemid='.$menuvalue);

		if(($params->get('image'.$i.'linktype') == 0) && ($params->get('image'.$i))) { // Button Link Type
			$listitem = '<li id="'.$params->get('image'.$i.'id').'"';
			if ($i == 1) {
				$listitem .= ' class="item active">';
			} else {
				$listitem .= ' class="item">';
			}
			$listitem .= "<img class='img-responsive' src='".JURI::root().$params->get('image'.$i)."' alt='".$params->get('image'.$i.'alt')."'/>";
			if ($params->get('image'.$i.'header') || $params->get('image'.$i.'cap') || $params->get('image'.$i.'btntext')) {
				$listitem .= '<div class="carousel-caption">';
			}
			if ($params->get('image'.$i.'header')) {
				$listitem .= "<h3>".$params->get('image'.$i.'header')."</h3>";
			}
			if ($params->get('image'.$i.'cap')) {
				$listitem .= "<p>".$params->get('image'.$i.'cap')."</p>";
			}
			if ($params->get('image'.$i.'btntext')) {
				$listitem .= "<a class='btn btn-default' href=".($params->get('image'.$i.'customlink') == '' ? $link : $params->get('image'.$i.'customlink'))." role='button'>".$params->get('image'.$i.'btntext')."</a>";
			}
			if ($params->get('image'.$i.'header') || $params->get('image'.$i.'cap') || $params->get('image'.$i.'btntext')) {
				$listitem .= '</div>';
			}
			$listitem .= "</li>";
			array_push($imgsAndCaps, $listitem);
		} elseif (($params->get('image'.$i.'linktype') == 1) && ($params->get('image'.$i))) { // Image Link
			$listitem = '<li id="'.$params->get('image'.$i.'id').'"';
			if ($i == 1) {
				$listitem .= ' class="item active">';
			} else {
				$listitem .= ' class="item">';
			}
			$listitem .= '<a href="'.($params->get('image'.$i.'customlink') == '' ? $link : $params->get('image'.$i.'customlink')).'">';
			$listitem .= "<img class='img-responsive' src='".JURI::root().$params->get('image'.$i)."' alt='".$params->get('image'.$i.'alt')."'/>";
			if ($params->get('image'.$i.'header') || $params->get('image'.$i.'cap') || $params->get('image'.$i.'btntext')) {
				$listitem .= '<div class="carousel-caption">';
			}
			if ($params->get('image'.$i.'header')) {
				$listitem .= "<h3>".$params->get('image'.$i.'header')."</h3>";
			}
			if ($params->get('image'.$i.'cap')) {
				$listitem .= "<p>".$params->get('image'.$i.'cap')."</p>";
			}
			// No button shown as the item is the whole link, no need for a button
			if ($params->get('image'.$i.'header') || $params->get('image'.$i.'cap') || $params->get('image'.$i.'btntext')) {
				$listitem .= '</div>';
			}
			$listitem .= "</a>";
			$listitem .= "</li>";
			array_push($imgsAndCaps, $listitem);
		} else { // No Link for Item
			if($params->get('image'.$i)){
				$listitem = '<li id="'.$params->get('image'.$i.'id').'"';
				if ($i == 1) {
					$listitem .= ' class="item active">';
				} else {
					$listitem .= ' class="item">';
				}
				$listitem .= "<img class='img-responsive' src='".JURI::root().$params->get('image'.$i)."' alt='".$params->get('image'.$i.'alt')."'/>";
				if ($params->get('image'.$i.'header') || $params->get('image'.$i.'cap') || $params->get('image'.$i.'btntext')) {
					$listitem .= '<div class="carousel-caption">';
				}
				if ($params->get('image'.$i.'header')) {
					$listitem .= "<h3>".$params->get('image'.$i.'header')."</h3>";
				}
				if ($params->get('image'.$i.'cap')) {
					$listitem .= "<p>".$params->get('image'.$i.'cap')."</p>";
				}
				if ($params->get('image'.$i.'btntext')) {
					$listitem .= "<a class='btn btn-default' href='' role='button'>".$params->get('image'.$i.'btntext')."</a>";
				}
				if ($params->get('image'.$i.'header') || $params->get('image'.$i.'cap') || $params->get('image'.$i.'btntext')) {
					$listitem .= '</div>';
				}
				$listitem .= "</li>";
				array_push($imgsAndCaps, $listitem);
			}
		}
		
		$i++;
		
		endwhile;
		
		return $imgsAndCaps;
		
	}
	
}		