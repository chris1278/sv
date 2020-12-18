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

// Erklärung innerhalb der beiden Hochkommas das Wort SPRACHVARIABEL austauchen mit der Variabel mit
// der man den Eintrag ersetzen mööchte. und den Begriff TESTBEISPIEL ersetzen durch den gewünschten eintrag bzw. die gewünschte änderung.

$lang = array_merge($lang, array(
		'SPRACHVARIABEL'						=> 'TESTBEISPIEL',
));
