<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * memeshare Admin Controller
 *
 * This class handles some admin functionality
 *
 * @package		bookit
 * @subpackage	Admin
 * @author		sc mondal
 * @link		http://scmondal.skywebit.com
 */
require_once'Google_plus_auth_core.php';
class Google_plus_auth extends Google_plus_auth_core {

	public function __construct()
	{
		parent::__construct();
	}
}