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
		$this->load->library('session');
		$this->load->helper('url');

		$language = $this->session->userdata('language');
//		$previous_page = $this->session->userdata('previous_page');

//		var_dump($language . " the language got from sessions");
//        exit($language);
		$this->config->set_item('language', $language);

		$this->load->helper('language');
		$this->lang->load('generic');

	}


}

/* End of file Fils_Base_Controller.php */
/* Location: ./application/controllers/Fils_Base_Controller.php */