<?php
/**
 * @copyright	Copyright (C) 2015 Morris Projects. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

//include the class of the syndicate functions only once
require_once(dirname(__FILE__).'/helper.php');

//keeps module class suffix even if templateer tries to stop it
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

$listofimages = mod_mpbase_bootcarouselHelper::getImages($params);
//mod_mpbase_bootcarouselHelper::load_jquery($params);

require(JModuleHelper::getLayoutPath('mod_mpbase_bootcarousel'));