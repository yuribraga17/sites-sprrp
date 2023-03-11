<?php
/**
*
* Application Form extension for the phpBB Forum Software package.
*
* @copyright (c) 2020 Rich McGirr (RMcGirr83)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace rmcgirr83\applicationform\controller;

/**
* Interface for our main controller
*
* This describes all of the methods we'll use for the admin front-end of this extension
*/
interface main_interface
{
	/**
	* Display the output for this extension
	*
	* @return null
	* @access public
	*/
	public function displayform();
}
