<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Classified Auth Controller
 *
 * This class handles Auth management related functionality
 *
 * @package		Admin
 * @subpackage	Auth
 * @author		skywebit
 * @link		https://skywebit.com
 */
require_once'Auth_core.php';
class Auth extends Auth_core {

	public function __construct()
	{
		parent::__construct();
	}
}