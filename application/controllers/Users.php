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
        $this->load->helper('url');
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
            //avertir l'utilisateur de son inscription
            echo "<script>alert('Enregistré avec succès');</script>";
            redirect('accueil', 'refresh');
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
            $this->form_validation->set_message('email_check', 'Email ou mot de passe incorrect.');
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }

    public function connexion(){
        $this->load->helper('form');
        $this->load->library('session');


        $data = array(
            'mail'=>$this->input->post('email'),
            'mdp'=>$this->input->post('password'),
        );
        $res = $this->users_model->select($data);

        if ($res == 0)
        {
            if($this->input->post('email') != null) {
                echo "<script>alert('Email ou mot de passe incorrect');</script>";
            }

            $this->load->view('formulaire_connexion');
        }
        else
        {
            //session
            $statue = array(
                'email' =>  $this->input->post('email'),
                'statut' => 'utilisateur',
                'logged_in' => TRUE
            );
            $this->session->set_userdata($statue);

            //Logged in successfully
            echo "<script>alert('Connecté avec succès');</script>";
            redirect('accueil', 'refresh');
        }
    }

    //seulement les utilisateurs connectes accedent a cette page
    public function profil() {
        $this->load->library('session');

        //obtenir les infos personnelles
        $data['mail'] = $this->session->userdata["email"];

        $res = $this->users_model->getInfo($data)->result();

      
        foreach($res as $row){
            $nom =  $row->nom;
            $prenom =  $row->prenom;
            $mail =  $row->mail;
            $adresse =  $row->adresse;
        }

        $data['profil'] = array(
            'nom' => $nom,
            'prenom'=> $prenom,
            'mail' => $mail,
            'adresse' => $adresse
        );


        $this->load->view('profil', $data);

    }

    //mise en vente

}

