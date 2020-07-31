<?php
/**
*
* @package ACP User Notifications
* @copyright (c) 2020 david63
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace david63\acpusernotifications\controller;

/**
* Interface for our main controller
*
* This describes all of the methods we'll use for the front-end of this extension
*/
interface acp_user_notify_interface
{
	/**
	* Process the ACP user data
	*
	* @param $name
	*
	* @return \Symfony\Component\HttpFoundation\Response A Symfony Response object
	* @access public
	*/
	public function acp_users_notify($event);
}
