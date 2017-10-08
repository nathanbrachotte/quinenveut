<?php
/**
 * Created by PhpStorm.
 * User: HAN_Qianqian
 * Date: 2017/10/7/007
 * Time: 14:17
 */
class Users extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('users_model');
    }

    public function inscription()
    {
        $this->load->library('form_validation');
        $this->load->helper('url');

        //regles pour l'inscription
        $this->form_validation->set_rules('email','Email','required|valid_email|callback_email_check');
        $this->form_validation->set_rules('password', 'Password', 'required|matches[passconf]|min_length[6]|max_length[12]|alpha_numeric');
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
        $this->form_validation->set_rules('firstname', 'Firstename', 'alpha');
        $this->form_validation->set_rules('lastname', 'Lastname', 'alpha');

        $bool = $this->form_validation->run();
        if ($bool)
        {
            //ajouter le nouvel utilisateur dans la base de donnees
            $data = array(
                'id_role'=>2,
                'mail'=>$this->input->post('email'),
                'mdp'=>$this->input->post('password'),
                'nom'=>$this->input->post('firstname'),
                'prenom'=>$this->input->post('lastname'),
                'adresse'=>$this->input->post('adresse'),
                'statut'=>0,
            );
            $this->users_model->insert($data);
            echo "You have registered successfully and logged in! 
                <br>Page home (wating.....)";
        }
        else
        {
            $this->load->view('formulaire_inscription');
        }
    }

    //verifier si le mail existe deja
    public function email_check($str)
    {
        $res = $this->users_model->verify($str);
        if ($res == 1)
        {
            $this->form_validation->set_message('email_check', 'The account has exsited.');
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }

    public function connexion(){
        $this->load->helper('form');
        $data = array(
            'mail'=>$this->input->post('email'),
            'mdp'=>$this->input->post('password'),
        );
        $res = $this->users_model->select($data);

        if ($res == 0)
        {
            $this->load->view('formulaire_connexion');
        }
        else
        {
            echo "Logged in successfully! 
                <br>Page home (wating.....)";
        }
    }
}