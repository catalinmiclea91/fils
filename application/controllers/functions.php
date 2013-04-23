<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Functions extends Fils_Base_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function setLanguage($language, $page)
	{
		$newdata = array(
			'language'  => $language
		);
		$this->session->set_userdata($newdata);
        redirect($page, 'refresh');
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */