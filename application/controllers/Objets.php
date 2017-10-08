<?php
/**
 * Created by PhpStorm.
 * User: a-sellier
 * Date: 07/10/17
 * Time: 20:08
 */

class Objets extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('objets_model');
    }

    public function lister()
    {
        $data['title'] = 'Liste des objets';

        $data['objets'] = $this->objets_model->get_objets();

        $this->load->view('templates/header_visiteur',$data);
        $this->load->view('liste_objets', $data);
        $this->load->view('templates/footer');
    }
    public function ajouter_objet(){
        $this->load->library('form_validation');
        $this->load->helper('url');

    }
}