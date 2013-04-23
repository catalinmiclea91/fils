<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fils_Base_Controller extends CI_Controller
{

    public $language;

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

		$this->language = $this->session->userdata('language');     // Trebuie facuta o verificare aici, default - limba default

		$this->config->set_item('language', $this->language);

		$this->load->helper('language');
		$this->lang->load('generic');

	}

}

/* End of file Fils_Base_Controller.php */
/* Location: ./application/controllers/Fils_Base_Controller.php */