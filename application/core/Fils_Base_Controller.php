<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fils_Base_Controller extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->_before();
	}

	/**
	 * @function:       _before()
	 * @type:            private
	 * @mapped url:
	 * @parameters:
	 * @return:
	 */
	private function _before()
	{

	}


}

/* End of file Fils_Base_Controller.php */
/* Location: ./application/controllers/Fils_Base_Controller.php */