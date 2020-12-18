<?php
/**
*
* @package phpBB Extension - Benutzerdefinierte Sprachvariabeln
* @copyright (c) 2020 (Chris1278)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// Explanation within the two apostrophes, replace the word SPRACHVARIABEL with the variable with which you want to replace the entry,
// and replace the term TEST EXAMPLE with the desired entry or the desired change.

$lang = array_merge($lang, array(
		'SPRACHVARIABEL'						=> 'TESTBEISPIEL',
));
