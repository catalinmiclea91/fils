<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admission extends Fils_Layout_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Index Page for home controller.
     *
     * Maps to the following URL
     *      http://example.com/
     *      http://example.com/home
     * 		http://example.com/index.php/home
     *	- or -
     * 		http://example.com/index.php/home/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->add_view('admission/admission');
        $this->render();
    }

    /*Submenu functions*/
    public function licence()
    {
        $data['text'] = 'unu';

        $this->add_view('admission/licence', $data);
        $this->render();
    }
    public function master()
    {
        $this->add_view('admission/master');
//        $this->add_view('news_sidebar');

        $this->render();
    }
    public function doctorate()
    {
        $this->add_view('admission/doctorate');
        $this->render();
    }
    public function other_info()
    {
        $this->add_view('admission/other-info');
        $this->render();
    }
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */