<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Students extends Fils_Layout_Controller
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
        $this->add_view('students/students');
        $this->render();
    }


    public function schedule()
    {
        $this->add_view('students/schedule');
        $this->render();
    }

    public function foreign_internships()
    {
        $this->add_view('students/foreign-internships');
        $this->render();
    }

    public function practical_internships()
    {
        $this->add_view('students/practical-internships');
        $this->render();
    }

    public function personal_page()
    {
        $this->add_view('students/personal-page');
        $this->render();
    }

    public function accommodation()
    {
        $this->add_view('students/accommodation');
        $this->render();
    }

    public function student_organizations()
    {
        $this->add_view('students/student-organizations');
        $this->render();
    }

    public function foreign_students()
    {
        $this->add_view('students/foreign-students');
        $this->render();
    }

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */