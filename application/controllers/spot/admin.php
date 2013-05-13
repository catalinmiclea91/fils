<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by JetBrains PhpStorm.
 * User: p.florian91
 * Date: 5/6/13
 * Time: 1:28 AM
 * To change this template use File | Settings | File Templates.
 */
class Admin extends Fils_Layout_Controller
{
    //public $user_is_logged = false;

    private function before()
    {
        $this->verify_logged_in();  // verify if the user is logged in
    }

    public function __construct()
    {
        $this->load_helper_language = false;

        parent::__construct();  // construct the parent
        $this->before();        // execute before anything in this controller
    }

    /**
     * @ function:          index
     * @ type:              public
     * @ mapped url:        /spot/admin
     * @ parameters:
     * @ action:            show the index page for the fils admin
     * @ return:
     */
    public function index()
    {
        if($this->admin_is_logged)
        {
            $this->add_view('spot/home');
            $this->title = 'Admin fils';
            $this->meta_description = 'No index, No folow!';
            $this->admin_render();
        }
        else
        {
            $this->show_login();
        }
    }

    public function logout()
    {
        $this->clear_session();
        redirect('/spot/admin', 'refresh');
    }

    /**
     * @ function:          login
     * @ type:              public
     * @ mapped url:        /admin-login
     * @ parameters:        post username, password
     * @ action:            set session username & email
     * @ return:
     */
    public function login()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|max_length[50]|alpha_dash');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|max_length[50]');
        $this->form_validation->set_message('required', 'The %s field can not be empty!');
        $this->form_validation->set_message('min_length', 'The %s field must have min 5 characters!');
        $this->form_validation->set_message('max_length', 'The %s field must have max 50 characters!');
        $this->form_validation->set_message('alpha_dash', 'The %s field must contain only alpha-numeric characters, underscores or dashes!');

        if ($this->form_validation->run() == FALSE)
        {
              $this->show_login();
        }
        else
        {
            $this->do_login($username, $password);
        }
    }

    /**
     * @ function:          do_login
     * @ type:              private
     * @ mapped url:
     * @ parameters:
     * @ action:            render the login form
     * @ return:
     */
    private function do_login($username, $password)
    {
        $select = 'email';
        $where = array('username' => $username, 'password' => $password);
        $this->load->model('spot/Admin_model', 'admin');
        $result = $this->admin->get_admin($where, $select);
        if(!empty($result) && $result !== null)
        {
            $email = $result[0]['email'];
            $this->set_session($username, $email);
            redirect('/spot/admin', 'refresh');
        }
        else
        {
            $data = array('login_error' => 'The Username or Password is incorrect. Please try again!');
            $this->show_login($data);
        }
    }

    /**
     * @ function:          set_session
     * @ type:              private
     * @ mapped url:
     * @ parameters:
     * @ action:            set session data
     * @ return:
     */
    private function set_session($username, $email)
    {
        $data = array(
            'username' => $username,
            'email' => $email,
        );
        $this->session->set_userdata($data);
    }

    /**
     * @ function:          show_login
     * @ type:              protected
     * @ mapped url:
     * @ parameters:
     * @ action:            render the login form
     * @ return:
     */
    protected function show_login($data = "")
    {
        $this->add_view('spot/login', $data);

        $this->title = 'Admin fils - Login';
        $this->meta_description = 'No index, No folow!';

        $this->admin_render();
    }

    /**
     * @ function:          clear_session
     * @ type:              private
     * @ mapped url:
     * @ parameters:
     * @ action:            destroy the session
     * @ return:
     */
    private function clear_session()
    {
        $this->session->sess_destroy();
    }

    /**
     * @ function:          verify_logged_in
     * @ type:              private
     * @ mapped url:
     * @ parameters:
     * @ action:            set the user_is_logged boolean & destroy the session
     * @ return:
     */
    private function verify_logged_in()
    {
        $logged = $this->user_is_logged();
        if( ! $logged )
        {
            //$this->clear_session();
            $this->admin_is_logged = false;
        }
        else
        {
            $this->admin_is_logged = true;
        }
    }

    /**
     * @ function:          user_is_logged
     * @ type:              private
     * @ mapped url:
     * @ parameters:
     * @ action:            check if the user is logged in
     * @ return:            true / false
     */
    private function user_is_logged()
    {
        $username = $this->session->userdata('username');
        $email = $this->session->userdata('email');
        if( isset($username) && isset($email) && $username != null && $email != null )
        {
            return true;
        }
        else
        {
            return false;
        }
    }

}
/* End of file admin.php */
/* Location: ./application/controllers/spot/admin.php */