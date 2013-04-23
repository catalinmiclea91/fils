<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Functions extends Fils_Base_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

    public function index(){
        echo 'Hello';
    }

	public function setLanguage($language, $page)
	{
		//faci un switch aici cu default 'english'


		$newdata = array(
			'language'  => $language,
			'previous_page' => $page,
		);

		$this->session->set_userdata($newdata);

        //redirect('/', 'refresh');
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */