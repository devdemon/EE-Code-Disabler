<?php  if ( ! defined('EXT')) exit('No direct script access allowed');

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * EE Code Disabler
 *
 * Disables Expression Engine Code
 *
 * This file must be placed in the
 * /system/plugins/ folder in your ExpressionEngine installation.
 *
 * @package DevDemon:EECodeDisabler
 * @version 1.0.0
 * @author DevDemon
 * @see http://www.devdemon.com/
 * @copyright Copyright (c) 2009-2010 DevDemon
 */


/**
 * Plugin information used by ExpressionEngine
 *
 * @global array $plugin_info
 */
$plugin_info = array(
	'pi_name'		=> 'EE Code Disabler',
	'pi_version'	=> '1.0.0',
	'pi_author'		=> 'DevDemon',
	'pi_author_url'	=> 'http://www.devdemon.com',
	'pi_description'=> 'Disables Expression Engine Code',
	'pi_usage'		=> EE_Code_Disabler::usage()
	);



/**
 * EE Code Disabler Class
 *
 * @package DevDemon:EECodeDisabler
 * @version 1.0.0
 * @author DevDemon
 * @see http://www.devdemon.com/
 * @copyright Copyright (c) 2009-2010 DevDemon
 */
class EE_Code_Disabler
{
	/**
	 * Return Data
	 *
	 * @var string
	 */
	var $return_data = '';


	function disable()
	{
		global $TMPL;

		$TMPL->tagdata = str_replace(array ('{', '}', '{exp'), array ('&#123;', '&#125;', '&#123;exp'), $TMPL->tagdata);

		return $TMPL->tagdata;
	}

	// ********************************************************************************* //

	/**
	 * Plugin usage documentation
	 *
	 * @return	string - Plugin usage instructions
	 */
	function usage()
	{
		return 'For usage visit: http://www.devdemon.com/';
	}

	// ********************************************************************************* //

} // END CLASS

/* End of file pi.ee_code_disabler.php */
/* Location: ./system/plugins/pi.ee_code_disabler.php */